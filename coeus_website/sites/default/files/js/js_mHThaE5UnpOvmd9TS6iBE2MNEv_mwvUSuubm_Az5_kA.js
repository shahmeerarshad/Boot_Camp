Drupal.locale = { 'pluralFormula': function ($n) { return Number(($n!=1)); }, 'strings': {"":{"An AJAX HTTP error occurred.":"Ein AJAX-HTTP-Fehler ist aufgetreten.","HTTP Result Code: !status":"HTTP-R\u00fcckgabe-Code: !status","An AJAX HTTP request terminated abnormally.":"Eine AJAX-Anfrage ist abnormal beendet worden.","Debugging information follows.":"Im Folgenden finden Sie Debugging-Informationen.","Path: !uri":"Pfad: !uri","StatusText: !statusText":"Statustext: !statusText","ResponseText: !responseText":"Antworttext: !responseText","ReadyState: !readyState":"ReadyState: !readyState","Please wait...":"Bitte warten...","Autocomplete popup":"Popup zur automatischen Vervollst\u00e4ndigung","Searching for matches...":"Suche \u2026","No results":"Keine Ergebnisse","clear":"l\u00f6schen","All":"Alle","New":"Neu","Recent":"Neu","This permission is inherited from the authenticated user role.":"Diese Berechtigung wird von der Rolle \u201aAuthentifizierte Benutzer\u2018 ererbt.","Hide":"Ausblenden","Show":"Anzeigen","Re-order rows by numerical weight instead of dragging.":"Zeilen mittels numerischer Gewichtung ordnen statt mit Drag-and-Drop","Show row weights":"Zeilenreihenfolge anzeigen","Hide row weights":"Zeilenreihenfolge ausblenden","Drag to re-order":"Ziehen, um die Reihenfolge zu \u00e4ndern","Changes made in this table will not be saved until the form is submitted.":"\u00c4nderungen in dieser Tabelle werden nicht gespeichert, bis dieses Formular abgesendet wurde.","Not restricted":"Uneingeschr\u00e4nkt","Restricted to certain pages":"Auf bestimmte Seiten eingeschr\u00e4nkt","Not customizable":"Nicht anpassbar","The changes to these blocks will not be saved until the \u003Cem\u003ESave blocks\u003C\/em\u003E button is clicked.":"Die \u00c4nderungen an diesen Bl\u00f6cken werden nicht gespeichert, bis auf dem \u003Cem\u003EBl\u00f6cke speichern\u003C\/em\u003E-Button geklickt wurde.","The block cannot be placed in this region.":"Der Block kann nicht in dieser Region abgelegt werden.","(active tab)":"(aktiver Reiter)","Hide summary":"Zusammenfassung verbergen","Edit summary":"Zusammenfassung bearbeiten","Not in menu":"Nicht im Men\u00fc","New revision":"Neue Version","No revision":"Keine Version","By @name on @date":"Von @name am @date","By @name":"Von @name","Not published":"Nicht ver\u00f6ffentlicht","Alias: @alias":"Alias: @alias","No alias":"Kein Alias","@number comments per page":"@number Kommentare pro Seite","The selected file %filename cannot be uploaded. Only files with the following extensions are allowed: %extensions.":"Die ausgew\u00e4hlte Datei %filename konnte nicht hochgeladen werden. Nur Dateien mit den folgenden Erweiterungen sind zul\u00e4ssig: %extensions.","Edit":"Bearbeiten","Requires a title":"Ben\u00f6tigt einen Titel","Don\u0027t display post information":"Beitragsinformationen nicht anzeigen","Add":"Hinzuf\u00fcgen","Remove group":"Gruppe entfernen","Apply (all displays)":"Anwenden (alle Anzeigen)","Revert to default":"Auf Standardwert zur\u00fccksetzen","Apply (this display)":"Anwenden (diese Anzeige)","Configure":"Konfigurieren","Select all rows in this table":"Alle Zeilen dieser Tabelle ausw\u00e4hlen","Deselect all rows in this table":"Alle Zeilen dieser Tabelle abw\u00e4hlen","This field is required.":"Diese Angabe wird ben\u00f6tigt."}} };;
(function ($) {

/**
 * A progressbar object. Initialized with the given id. Must be inserted into
 * the DOM afterwards through progressBar.element.
 *
 * method is the function which will perform the HTTP request to get the
 * progress bar state. Either "GET" or "POST".
 *
 * e.g. pb = new progressBar('myProgressBar');
 *      some_element.appendChild(pb.element);
 */
Drupal.progressBar = function (id, updateCallback, method, errorCallback) {
  var pb = this;
  this.id = id;
  this.method = method || 'GET';
  this.updateCallback = updateCallback;
  this.errorCallback = errorCallback;

  // The WAI-ARIA setting aria-live="polite" will announce changes after users
  // have completed their current activity and not interrupt the screen reader.
  this.element = $('<div class="progress" aria-live="polite"></div>').attr('id', id);
  this.element.html('<div class="bar"><div class="filled"></div></div>' +
                    '<div class="percentage"></div>' +
                    '<div class="message">&nbsp;</div>');
};

/**
 * Set the percentage and status message for the progressbar.
 */
Drupal.progressBar.prototype.setProgress = function (percentage, message) {
  if (percentage >= 0 && percentage <= 100) {
    $('div.filled', this.element).css('width', percentage + '%');
    $('div.percentage', this.element).html(percentage + '%');
  }
  $('div.message', this.element).html(message);
  if (this.updateCallback) {
    this.updateCallback(percentage, message, this);
  }
};

/**
 * Start monitoring progress via Ajax.
 */
Drupal.progressBar.prototype.startMonitoring = function (uri, delay) {
  this.delay = delay;
  this.uri = uri;
  this.sendPing();
};

/**
 * Stop monitoring progress via Ajax.
 */
Drupal.progressBar.prototype.stopMonitoring = function () {
  clearTimeout(this.timer);
  // This allows monitoring to be stopped from within the callback.
  this.uri = null;
};

/**
 * Request progress data from server.
 */
Drupal.progressBar.prototype.sendPing = function () {
  if (this.timer) {
    clearTimeout(this.timer);
  }
  if (this.uri) {
    var pb = this;
    // When doing a post request, you need non-null data. Otherwise a
    // HTTP 411 or HTTP 406 (with Apache mod_security) error may result.
    $.ajax({
      type: this.method,
      url: this.uri,
      data: '',
      dataType: 'json',
      success: function (progress) {
        // Display errors.
        if (progress.status == 0) {
          pb.displayError(progress.data);
          return;
        }
        // Update display.
        pb.setProgress(progress.percentage, progress.message);
        // Schedule next timer.
        pb.timer = setTimeout(function () { pb.sendPing(); }, pb.delay);
      },
      error: function (xmlhttp) {
        pb.displayError(Drupal.ajaxError(xmlhttp, pb.uri));
      }
    });
  }
};

/**
 * Display errors on the page.
 */
Drupal.progressBar.prototype.displayError = function (string) {
  var error = $('<div class="messages error"></div>').html(string);
  $(this.element).before(error).hide();

  if (this.errorCallback) {
    this.errorCallback(this);
  }
};

})(jQuery);
;

(function ($) {

  $(document).ready(function () {
    lastObj = false;
    strs = Drupal.settings.thmrStrings;
    $('body').addClass("thmr_call").attr("id", "thmr_" + Drupal.settings.page_id);

    var themerEnabled = 0;
    var themerToggle = function () {
      themerEnabled = 1 - themerEnabled;
      $('#themer-toggle :checkbox').attr('checked', themerEnabled ? 'checked' : '');
      $('#themer-popup').css('display', themerEnabled ? 'block' : 'none');
      if (themerEnabled) {
        document.onclick = themerEvent;
        if (lastObj != false) {
          $(lastObj).css('outline', '3px solid #999');
        }
        $('[data-thmr]').hover(
          function () {
            if (this.parentNode.nodeName != 'BODY' && $(this).attr('thmr_curr') != 1) {
              $(this).css('outline', 'red solid 1px');
            }
          },
          function () {
            if ($(this).attr('thmr_curr') != 1) {
              $(this).css('outline', 'none');
            }
          }
        );
      }
      else {
        document.onclick = null;
        if (lastObj != false) {
          $(lastObj).css('outline', 'none');
        }
        $('[data-thmr]').unbind('mouseenter mouseleave');
      }
    };
    $(Drupal.settings.thmr_popup)
      .appendTo($('body'));

    $('<div id="themer-toggle"><input type="checkbox" />'+ strs.themer_info +'</div>')
      .appendTo($('body'))
      .click(themerToggle);
    $('#themer-popup').resizable();
    $('#themer-popup')
       .draggable({
               opacity: .6,
               handle: $('#themer-popup .topper')
             })
      .prepend(strs.toggle_throbber)
    ;

    // close box
    $('#themer-popup .topper .close').click(function() {
      themerToggle();
    });
  });

  /**
   * Known issue: IE does NOT support outline css property.
   * Solution: use another browser
   */
  function themerHilight(obj) {
    // hilight the current object (and un-highlight the last)
    if (lastObj != false) {
      $(lastObj).css('outline', 'none').attr('thmr_curr', 0);
    }
    $(obj).css('outline', '#999 solid 3px').attr('thmr_curr', 1);
    lastObj = obj;
  }

  function themerDoIt(obj) {
    if (thmrInPop(obj)) {
      return true;
    }
    // start throbber
    //$('#themer-popup img.throbber').show();
    var objs = thmrFindParents(obj);
    if (objs.length) {
      themerHilight(objs[0]);
      thmrRebuildPopup(objs);
    }
    return false;
  }

  function thmrInPop(obj) {
    //is the element in either the popup box or the toggle div?
    if (obj.id == "themer-popup" || obj.id == "themer-toggle") return true;
    if (obj.parentNode) {
      while (obj = obj.parentNode) {
        if (obj.id=="themer-popup" || obj.id == "themer-toggle") return true;
      }
    }
    return false;
  }

  function themerEvent(e) {
    if (!e) {
      var e = window.event;
    };
    if (e.target) var tg = e.target;
    else if (e.srcElement) var tg = e.srcElement;
    return themerDoIt(tg);
  }

  /**
   * Find all parents with @data-thmr"
   */
  function thmrFindParents(obj) {
    var parents = new Array();
    if ($(obj).attr('data-thmr') != undefined) {
      parents[parents.length] = obj;
    }
    if (obj && obj.parentNode) {
      while ((obj = obj.parentNode) && (obj.nodeType != 9)) {
        if ($(obj).attr('data-thmr') != undefined) {
          parents[parents.length] = obj;
        }
      }
    }
    return parents;
  }

  /**
   * Check to see if object is a block element
   */
  function thmrIsBlock(obj) {
    if (obj.style.display == 'block') {
      return true;
    }
    else if (obj.style.display == 'inline' || obj.style.display == 'none') {
      return false;
    }
    if (obj.tagName != undefined) {
      var i = blocks.length;
      if (i > 0) {
        do {
          if (blocks[i] === obj.tagName) {
            return true;
          }
        } while (i--);
      }
    }
    return false;
  }

  function thmrRefreshCollapse() {
    $('#themer-popup .devel-obj-output dt').each(function() {
        $(this).toggle(function() {
              $(this).parent().children('dd').show();
            }, function() {
              $(this).parent().children('dd').hide();
            });
      });
  }

  /**
   * Rebuild the popup
   *
   * @param objs
   *   The array of the current object and its parents. Current object is first element of the array
   */
  function thmrRebuildPopup(objs) {
    // rebuild the popup box
    var id = objs[0].getAttribute('data-thmr').split(' ').reverse()[0];
    // vars is the settings array element for this theme item
    var vars = Drupal.settings[id];
    // strs is the translatable strings
    var strs = Drupal.settings.thmrStrings;
    var type = vars.type;
    var key = vars.used;

    // clear out the initial "click on any element" starter text
    $('#themer-popup div.starter').empty();

    $('#themer-popup dd.key').empty().prepend('<a href="'+ strs.api_site +'api/search/'+ strs.drupal_version +'/'+ vars.search +'" title="'+ strs.drupal_api_docs +'">'+ key + '</a>');
    $('#themer-popup dt.key-type').empty().prepend((type == 'function') ? strs.function_called : strs.template_called);

    // parents
    var parents = '';
    var parents = strs.parents +' <span class="parents">';
    var isFirst = true;
    for (i = 0; i < objs.length; i++) {
      thmr_ids = objs[i].getAttribute('data-thmr').split(' ').reverse();
      for (j = (i==0?1:0); j < thmr_ids.length; j++) {
        var thmrid = thmr_ids[j];
        var pvars = Drupal.settings[thmrid];
        parents += (isFirst) ? '' : '&lt; ';
        // populate the parents
        // each parent is wrapped with a span containing a 'trig' attribute with the id of the element it represents
        parents += '<span class="parent" trig="'+ objs[i].getAttribute('data-thmr') +'">'+ pvars.name +'</span> ';
        isFirst = false;
      }
    }
    parents += '</span>';
    // stick the parents spans in the #parents div
    $('#themer-popup #parents').empty().prepend(parents);
    $('#themer-popup span.parent')
      .click(function() {
        var thmr_id = $(this).attr('trig');
        var thmr_obj = $('[data-thmr = "' + thmr_id + '"]')[0];
        themerDoIt(thmr_obj);
      })
      .hover(
        function() {
          // make them highlight their element on mouseover
          $('#'+ $(this).attr('trig')).trigger('mouseover');
        },
        function() {
          // and unhilight on mouseout
          $('#'+ $(this).attr('trig')).trigger('mouseout');
        }
      );

    if (vars == undefined) {
      // if there's no item in the settings array for this element
      $('#themer-popup dd.candidates').empty();
      $('#themer-popup dd.preprocessors').empty();
      $('#themer-popup div.attributes').empty();
      $('#themer-popup div.used').empty();
      $('#themer-popup div.duration').empty();
    }
    else {
      $('#themer-popup div.duration').empty().prepend('<span class="dt">' + strs.duration + '</span>' + vars.duration + ' ms');
 
      if (vars.candidates.length > 0) {
        $('#themer-popup dd.candidates').show().empty().prepend(vars.candidates.join('<span class="delimiter"> < </span>'));
  
        if (type == 'function') {
          // populate the candidates
          $('#themer-popup dt.candidates-type').show().empty().prepend(strs.candidate_functions);
        }
        else {
          $('#themer-popup dt.candidates-type').show().empty().prepend(strs.candidate_files);
        }
      }
      else {
        $('#themer-popup dt.candidates-type, #themer-popup dd.candidates').hide();
      }

      if (vars.preprocessors.length > 0) {
        $('#themer-popup dd.preprocessors').show().empty().prepend(vars.preprocessors.join('<span class="delimiter"> + </span>'));
        $('#themer-popup dt.preprocessors-type').show().empty().prepend(strs.preprocessors);
      }
      else {
        $('#themer-popup dd.preprocessors, #themer-popup dt.preprocessors-type').hide();
      }

      if (vars.processors.length > 0) {
        $('#themer-popup dd.processors').show().empty().prepend(vars.processors.join('<span class="delimiter"> + </span>'));
        $('#themer-popup dt.processors-type').show().empty().prepend(strs.processors);
      }
      else {
        $('#themer-popup dd.processors, #themer-popup dt.processors-type').hide();
      }

      // Use drupal ajax to do what we need 
      vars_div_array = $('div.themer-variables');
      vars_div = vars_div_array[0];
      var uri = Drupal.settings.devel_themer_uri + '/' + vars['variables'];
      // Programatically using the drupal ajax things is tricky, so cheat.
      dummy_link = $('<a href="'+uri+'" class="use-ajax">Loading Vars</a>');
      $(vars_div).append(dummy_link);
      Drupal.attachBehaviors(vars_div);
      dummy_link.click();
      
      thmrRefreshCollapse();
    }
    // stop throbber
    //$('#themer-popup img.throbber').hide();
  }

})(jQuery);
;