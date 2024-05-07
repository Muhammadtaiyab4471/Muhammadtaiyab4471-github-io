import java.util.List;
import java.util.Scanner;
import java.lang.Math;
import java.util.concurrent.ThreadLocalRandom;

public class Bank {
    public static void main(String[] args) {

        Scanner input = new Scanner(System.in);
        User user = new User();
        Account Account = new Account();

        int choice;

        do{

        System.out.println("1) Register ");
        System.out.println("2) Login ");
        System.out.println("3) Exit ");
        System.out.println("Choose an option: ");

        choice = input.nextInt();

        switch (choice) {

            case 1:

                Scanner case1 = new Scanner(System.in);

                System.out.println("Registration");

                System.out.println("Enter Full Name: First Name / Last Name ");
                String Full_Name = case1.nextLine();
                user.setFullName(Full_Name);

                System.out.println("Enter Date Of Birth: (DD/MM/YYYY) ");
                String Date_Of_Birth = case1.nextLine();
                user.setDateOfBirth(Date_Of_Birth);

                System.out.println("Enter your Phone Number: +971 - ********* ");
                String Phone_Number = ("0" + case1.nextLine());
                user.setPhoneNumber(Phone_Number);

                System.out.println("Enter Email: ");
                String Email = case1.nextLine();
                user.setEmail(Email);

                System.out.println("Enter Password: 9 Characters / 2 Numbers / 1 Special Characters ");
                String Password = case1.nextLine();
                user.setPassword(Password);

                System.out.println("Enter Identification Card Number: ***-*****-*** ");
                String ID_card = case1.nextLine();
                user.setIdNumber(ID_card);

                int RegID = ThreadLocalRandom.current().nextInt();
                RegID = Math.abs(RegID);
                String RegID1 = String.valueOf(RegID);
                user.setRegID(RegID1);

                List<String> AddElements = List.of(user.getFullName(), user.getEmail(), user.getPassword(), user.getPhoneNumber(), user.getDateOfBirth(), user.getIdNumber(), user.getRegID());
                String UserDetails = String.join(",", AddElements);
                user.setUserDetails(List.of(UserDetails));

                break;

            case 2:

                Scanner Login = new Scanner(System.in);
                System.out.println("Login");

                System.out.println("Enter your Email: ");
                String User_Input_Email = Login.nextLine();

                System.out.println("Enter your password: ");
                String User_Input_Password = Login.nextLine();

                boolean UserFound = false;
                for (String UserInformation : user.getUserDetails()) {

                    String[] UserAccountDetails = UserInformation.split(",");

                    if (UserAccountDetails[1].equals(User_Input_Email) && UserAccountDetails[2].equals(User_Input_Password)) {
                        UserFound = true;

                        System.out.println("Welcome");

                        String accFullName = UserAccountDetails[0];
                        String accEmail = UserAccountDetails[1];
                        String accPassword = UserAccountDetails[2];
                        String accDateOfBirth = UserAccountDetails[4];
                        String accPhoneNumber = UserAccountDetails[3];
                        String accIDCardNumber = UserAccountDetails[5];
                        String accRegID = UserAccountDetails[6];

                        int Check_Saving;

                        do {

                        System.out.println("1) Checking");
                        System.out.println("2) Saving");
                        System.out.println("3) View All Transaction");
                        System.out.println("4) Logout");
                        System.out.println("Choose your option: ");

                        Check_Saving = Login.nextInt();

                        switch (Check_Saving) {

                            case 1:

                                Scanner Checking = new Scanner(System.in);

                                System.out.println("Checking");

                                System.out.println("1) Balance");
                                System.out.println("2) Deposit");
                                System.out.println("3) Withdraw");
                                System.out.println("4) Go Back");
                                System.out.println("Choose Your Option");

                                int Check = Checking.nextInt();

                                switch (Check) {

                                    case 1:
                                        System.out.println("Your balance is " + Account.getCheckingBalance());
                                        break;

                                    case 2:

                                        System.out.println("Checking - Deposit");

                                        Scanner depositScanner = new Scanner(System.in);

                                        System.out.println("Enter the deposit amount: ");
                                        double depositAmount = depositScanner.nextDouble();
                                        if (depositAmount > 0) {
                                            Account.deposit(depositAmount);
                                            System.out.println("Updated Balance: $" + Account.getCheckingBalance());
                                        } else {
                                            System.out.println("Invalid deposit amount.");
                                        }

                                        List<String> DepositTransaction = List.of(("Checking Deposit +" + depositAmount),accRegID);
                                        String Transaction = String.join(",", DepositTransaction);
                                        Account.setCheckingTransaction(Transaction);


                                        break;

                                    case 3:

                                        System.out.println("Checking - Withdraw");
                                        Scanner withdrawScanner = new Scanner(System.in);

                                        System.out.println("Enter the withdrawal amount: ");
                                        double withdrawAmount = withdrawScanner.nextDouble();
                                        if (withdrawAmount > 0 && withdrawAmount <= Account.getCheckingBalance()) {
                                            Account.Withdraw(withdrawAmount);
                                            System.out.println("Updated Balance: $" + Account.getCheckingBalance());
                                        } else {
                                            System.out.println("Invalid withdrawal amount.");
                                        }

                                        List<String> withdrawTransaction = List.of(("Checking Withdraw -" + withdrawAmount),accRegID);
                                        String Transaction1 = String.join(",", withdrawTransaction);
                                        Account.setCheckingTransaction(Transaction1);

                                        break;

                                    case 4:
                                        System.out.println(" ");
                                        break;
                                }

                                break;

                            case 2:
                                System.out.println("Saving");
                                Scanner Saving = new Scanner(System.in);

                                System.out.println("1) Balance");
                                System.out.println("2) Deposit");
                                System.out.println("3) Withdraw");
                                System.out.println("4) Go Back");
                                System.out.println("Choose Your Option");

                                int Save = Saving.nextInt();

                                switch (Save) {

                                    case 1:
                                        System.out.println("Your balance is " + Account.getSavingBalance());
                                        break;

                                    case 2:

                                        System.out.println("Saving - Deposit");

                                        Scanner depositScanner = new Scanner(System.in);

                                        System.out.println("Enter the deposit amount: ");
                                        double depositAmount = depositScanner.nextDouble();
                                        if (depositAmount > 0 ) {
                                            Account.SavingDeposit(depositAmount);
                                            System.out.println("Updated Balance: $" + Account.getSavingBalance());
                                        } else {
                                            System.out.println("Invalid deposit amount.");
                                        }

                                        List<String> SavingTransaction = List.of(("Saving Deposit +" + depositAmount),accRegID);
                                        String Transaction = String.join(",", SavingTransaction);
                                        Account.setCheckingTransaction(Transaction);

                                        break;

                                    case 3:

                                        System.out.println("Saving - Withdraw");
                                        Scanner withdrawScanner = new Scanner(System.in);

                                        System.out.println("Enter the withdrawal amount: ");
                                        double withdrawAmount = withdrawScanner.nextDouble();
                                        if (withdrawAmount > 0 && withdrawAmount <= Account.getSavingBalance()) {
                                            Account.SavingWithdraw(withdrawAmount);
                                            System.out.println("Updated Balance: $" + Account.getSavingBalance());
                                        } else {
                                            System.out.println("Invalid withdrawal amount.");
                                        }

                                        List<String> withdrawTransaction = List.of(("Saving Withdraw -" + withdrawAmount),accRegID);
                                        String Transaction1 = String.join(",", withdrawTransaction);
                                        Account.setCheckingTransaction(Transaction1);

                                        break;

                                    case 4:
                                        System.out.println(" ");
                                        break;

                                }

                                break;

                            case 3:

                                Scanner obj = new Scanner(System.in);
                                System.out.println("1) View All Details");
                                System.out.println("2) Go Back");
                                int Transaction = obj.nextInt();
                                System.out.println("Choose your option: ");

                                switch (Transaction){

                                    case 1:

                                        boolean AccountFound = false;

                                        for (String AccountTransaction : Account.getCheckingTransaction()) {
                                            String[] AccountDetails = AccountTransaction.split(",");
                                            AccountFound = true;
                                            if(AccountDetails[1].equals(accRegID)) {
                                                System.out.println(AccountDetails[0]);
                                            }
                                        } if (!AccountFound){
                                        System.out.println("no Transaction found");
                                    }
                                        break;

                                    case 2:
                                        System.out.println(" ");
                                        break;
                                }

                                break;

                            case 4:
                                System.out.println("Login Out......");
                                break;
                        }


                        } while (Check_Saving != 4);

                        break;
                    }
                }
                    if (!UserFound){
                        System.out.println("Wrong details entered");
                    }


                break;

            case 3:
                System.out.println("Thank you, Goodbye. ");
                break;
        }

        } while (choice != 3);
    }
}