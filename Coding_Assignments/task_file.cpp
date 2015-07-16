//Print the elements of a linked list
//https://www.hackerrank.com/challenges/print-the-elements-of-a-linked-list
//https://www.hackerrank.com/shahmeerarshad

  
  struct Node
  {
     int data;
     struct Node *next;
  }
  
void Print(Node *head)
{
    Node *temp;
    temp=head;
        while(temp!=NULL)
 {       
           cout<<temp->data<<endl;
            temp=temp->next;
        }        
    
 
}
