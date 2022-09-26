import java.util.Scanner;
class Bill
{
public static void main(String args[])
{
Scanner sc = new Scanner(System.in);
int ctype,units,total=0;

System.out.println("ELECTRICITY BILL");
System.out.println("Enter the Customer Type:");
System.out.println("1-Domestic && 2-Commercial");
ctype=sc.nextInt();
System.out.println("Enter Number of Units Consumed:");
units=sc.nextInt();
if(ctype==1)
{
units = units-100;
if(units>0)
total = 250 + (units*8);
else
total = 250;
}
else
{
units = units-300;
if(units>0)
total = 1000 + (units*10);
else
total = 1000;
}
System.out.println("Total Bill="+total);
}
}
}