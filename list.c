#include <stdlib.h>
#include<stdio.h>
struct list_el
{
int val;
struct list_el *next;
};
typedef struct list_el item;
void Print(item *head)
{
    item *temp;
    temp=head;
        while(temp!=NULL)
 {       
        printf("%d\n",temp->val);
            temp=temp->next;
        }        
    
 
}

int main()
{
item *curr,*head;
int i;
head=NULL;
for(i=1;i<=10;i++)
{
curr = (item *)malloc(sizeof(item));
curr->val=i;
curr->next =head;
head=curr;
}
Print(head);

return 0;
}
