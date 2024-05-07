import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;
import java.util.concurrent.ThreadLocalRandom;

public class Library {

    static class MyClass {
        private static List<String> myArrayList = new ArrayList<>();

        // Encapsulated method to add multiple elements
        public void addElements(List<String> elements) {
            myArrayList.addAll(elements);
        }

        // Getter method to access the ArrayList
        public static List<String> getMyArrayList() {
            return myArrayList;
        }
    }
    static class MyClass2 {
        private static List<String> myArrayList = new ArrayList<>();

        // Encapsulated method to add multiple elements
        public void addElements(List<String> elements) {
            myArrayList.addAll(elements);
        }

        // Getter method to access the ArrayList
        public static List<String> getMyArrayList() {
            return myArrayList;
        }
    }
    static class MyClass3 {
        private static List<String> myArrayList = new ArrayList<>();

        // Encapsulated method to add multiple elements
        public void addElements(List<String> elements) {
            myArrayList.addAll(elements);
        }

        // Getter method to access the ArrayList
        public static List<String> getMyArrayList() {
            return myArrayList;
        }
    }

    static class MyClass4 {
        private static List<String> myArrayList = new ArrayList<>();

        // Encapsulated method to add multiple elements
        public void addElements(List<String> elements) {
            myArrayList.addAll(elements);
        }

        // Getter method to access the ArrayList
        public static List<String> getMyArrayList() {
            return myArrayList;
        }
    }

    public static void main(String[] args) {

        boolean RunAgain = true;
        while(RunAgain){

            Scanner options = new Scanner(System.in);

            System.out.println("Welcome");
            System.out.println("1) Add new user");
            System.out.println("2) view user details");
            System.out.println("3) view all users");
            System.out.println("4) Add new staff");
            System.out.println("5) View staff details");
            System.out.println("6) View all staff");
            System.out.println("7) Borrow a Book");
            System.out.println("8) Transaction throw a staff");
            System.out.println("9) Transaction on a particular date");
            System.out.println("10) Add Books");
            System.out.println("11) View all Books");
            System.out.println("12) Authors Books");
            System.out.println("13) Exit");
            System.out.println("choose your Option");

            int option1 = options.nextInt();
            switch (option1) {

                //Case 1

                case 1:

                    User a = new User();
                    Scanner userScanner = new Scanner(System.in);

                    boolean continueAddingMembers = true;

                    while (continueAddingMembers) {

                        System.out.println("Enter name: ");
                        String userName = userScanner.nextLine();
                        a.setName(userName);

                        System.out.println("Enter Phone Number: ");
                        String userPhoneNumber = userScanner.nextLine();
                        a.setPhoneNumber(userPhoneNumber);

                        System.out.println("Enter Address: ");
                        String userAddress = userScanner.nextLine();
                        a.setAddress(userAddress);

                        System.out.println("Your Registration Number is being processed: ");

                        int x = ThreadLocalRandom.current().nextInt();

                        if (x < 0) {
                            x = Math.abs(x);
                        }

                        String registrationNumber = String.valueOf(x);
                        a.setRegistrationNumber(registrationNumber);
                        System.out.println("Your registration Number: " + registrationNumber);

                        // Create an instance of MyClass
                        MyClass myObject = new MyClass();

                        // Create a list of elements to add
                        List<String> elementsToAdd = List.of(a.getName(), a.getAddress(), a.getPhoneNumber(), a.getRegistrationNumber());

                        // Join elements into a single comma-separated string
                        String userInformationString = String.join(",", elementsToAdd);

                        // Add the user information to myArrayList using encapsulation
                        myObject.addElements(List.of(userInformationString));

                        System.out.print("Do you want to add another member? (yes/no): ");
                        String userInput = userScanner.nextLine().toLowerCase();
                        continueAddingMembers = userInput.equals("yes");
                    }

                    break;

// Case 2
                case 2:

                    Scanner registrationScanner = new Scanner(System.in);
                    System.out.println("Enter Registration Number to view user details: ");
                    String enteredRegistrationNumber = registrationScanner.nextLine();

                    // Iterate through the ArrayList to find a match for the entered registration number
                    boolean userFound = false;
                    for (String userDetails : MyClass.getMyArrayList()) {
                        // Assuming each user's information is stored as a single string, split it into parts
                        String[] userInformation = userDetails.split(",");

                        // Check if the array has at least 4 elements (including registration number)
                        if (userInformation.length >= 4 && userInformation[3].equals(enteredRegistrationNumber)) {
                            userFound = true;

                            // Display user details
                            System.out.println("User Details:");
                            System.out.println("Name: " + userInformation[0]);
                            System.out.println("Phone Number: " + userInformation[2]);
                            System.out.println("Address: " + userInformation[1]);
                            System.out.println("Registration Number: " + userInformation[3]);
                            break; // Exit the loop once a match is found
                        }
                    }

                    // If no user is found with the entered registration number
                    if (!userFound) {
                        System.out.println("User not found with the entered Registration Number.");
                    }

                    break;

                //Case 3
                case 3:

                    List<String> list = MyClass.getMyArrayList();
                    for (String i : list) {
                        System.out.println(i);
                    }

                    break;

                case 4:

                    Staff b = new Staff();
                    Scanner StaffScanner = new Scanner(System.in);

                    boolean continueAddingMembers2 = true;
                    while (continueAddingMembers2) {

                        System.out.println("Enter name: ");
                        String userName = StaffScanner.nextLine();
                        b.setStaff_Name(userName);

                        System.out.println("Enter Phone Number: ");
                        String userPhoneNumber = StaffScanner.nextLine();
                        b.setStaff_PhoneNumber(userPhoneNumber);

                        System.out.println("Enter Address: ");
                        String userAddress = StaffScanner.nextLine();
                        b.setStaff_Address(userAddress);

                        System.out.println("Your Registration Number is being processed: ");

                        int x = ThreadLocalRandom.current().nextInt();

                        if (x < 0) {
                            x = Math.abs(x);
                        }

                        String registrationNumber = String.valueOf(x);
                        b.setStaff_RegistrationNumber(registrationNumber);
                        System.out.println("Your registration Number: " + registrationNumber);

                        Library.MyClass2 myObject = new Library.MyClass2();

                        // Create a list of elements to add
                        List<String> elementsToAdd = List.of(b.getStaffName(), b.getStaffAddress(), b.getStaffPhoneNumber(), b.getStaffRegistrationNumber());

                        // Join elements into a single comma-separated string
                        String userInformationString = String.join(",", elementsToAdd);

                        // Add the user information to myArrayList using encapsulation
                        myObject.addElements(List.of(userInformationString));

                        System.out.print("Do you want to add another member? (yes/no): ");
                        String userInput = StaffScanner.nextLine().toLowerCase();
                        continueAddingMembers2 = userInput.equals("yes");

                    }

                    break;

                case 5:

                    Scanner StaffregistrationScanner = new Scanner(System.in);
                    System.out.println("Enter Registration Number to view user details: ");
                    String StaffenteredRegistrationNumber = StaffregistrationScanner.nextLine();

                    // Iterate through the ArrayList to find a match for the entered registration number
                    boolean userFound1 = false;
                    for (String userDetails : Library.MyClass2.getMyArrayList()) {
                        // Assuming each user's information is stored as a single string, split it into parts
                        String[] userInformation = userDetails.split(",");

                        // Check if the array has at least 4 elements (including registration number)
                        if (userInformation.length >= 4 && userInformation[3].equals(StaffenteredRegistrationNumber)) {
                            userFound1 = true;

                            // Display user details
                            System.out.println("User Details:");
                            System.out.println("Name: " + userInformation[0]);
                            System.out.println("Phone Number: " + userInformation[2]);
                            System.out.println("Address: " + userInformation[1]);
                            System.out.println("Registration Number: " + userInformation[3]);
                            break; // Exit the loop once a match is found
                        }
                    }

                    // If no user is found with the entered registration number
                    if (!userFound1) {
                        System.out.println("User not found with the entered Registration Number.");
                    }

                    break;

                case 6:

                    List<String> list2 = Library.MyClass2.getMyArrayList();
                    for (String i : list2) {
                        System.out.println(i);
                    }

                    break;

                case 7:


                    Transaction d = new Transaction();
                    Scanner userScanner1 = new Scanner(System.in);

                    boolean continueAddingTransaction = true;

                    while (continueAddingTransaction) {

                        System.out.println("Enter User ID: ");
                        String Transaction_User_id = userScanner1.nextLine();
                        d.setTransaction_User_id(Transaction_User_id);

                        System.out.println("Enter Name: ");
                        String Transaction_Username = userScanner1.nextLine();
                        d.setTransaction_Username(Transaction_Username);

                        System.out.println("Enter Staff ID: ");
                        String Transaction_Staff_id = userScanner1.nextLine();
                        d.setTransaction_Staff_id(Transaction_Staff_id);

                        System.out.println("Enter Staff Name: ");
                        String Transaction_Staff_Name = userScanner1.nextLine();
                        d.setTransaction_Staff_Name(Transaction_Staff_Name);

                        System.out.println("Enter Book ID: ");
                        String Transaction_Book_id = userScanner1.nextLine();
                        d.setTransaction_Book_id(Transaction_Book_id);

                        System.out.println("Enter Book name: ");
                        String Transaction_Book_Name = userScanner1.nextLine();
                        d.setTransaction_Book_Name(Transaction_Book_Name);

                        System.out.println("Enter Today Date: ");
                        String Date_Of_Transaction = userScanner1.nextLine();
                        d.setDate_Of_Transaction(Date_Of_Transaction);


                        // Create an instance of MyClass
                        Library.MyClass4 myObject = new Library.MyClass4();

                        // Create a list of elements to add
                        List<String> elementsToAdd = List.of(d.getTransaction_User_id(), d.getTransaction_Username(), d.getTransaction_Staff_Name(), d.getTransaction_Book_id(), d.getTransaction_Book_Name(), d.getDate_Of_Transaction(), d.getTransaction_Staff_id());

                        // Join elements into a single comma-separated string
                        String userInformationString = String.join(",", elementsToAdd);

                        // Add the user information to myArrayList using encapsulation
                        myObject.addElements(List.of(userInformationString));

                        System.out.print("Do you want to add another Transaction? (yes/no): ");
                        String userInput = userScanner1.nextLine().toLowerCase();
                        continueAddingTransaction = userInput.equals("yes");
                    }

                    break;


                    // Inside the switch statement
                case 8:
                    Scanner staffIdScanner = new Scanner(System.in);
                    System.out.println("Enter Staff ID to view transactions: ");
                    String enteredStaffId = staffIdScanner.nextLine();

                    // Iterate through the ArrayList to find transactions linked to the entered staff ID
                    boolean transactionsFound = false;
                    for (String transactionDetails : Library.MyClass4.getMyArrayList()) {
                        // Assuming each transaction's information is stored as a single string, split it into parts
                        String[] transactionInformation = transactionDetails.split(",");

                        // Check if the array has at least 7 elements (including staff ID)
                        if (transactionInformation.length >= 7 && transactionInformation[6].equals(enteredStaffId)) {
                            transactionsFound = true;

                            // Display transaction details
                            System.out.println("Transaction Details:");
                            System.out.println("User ID: " + transactionInformation[0]);
                            System.out.println("Username: " + transactionInformation[1]);
                            System.out.println("Staff ID: " + transactionInformation[6]);
                            System.out.println("Staff Name: " + transactionInformation[2]);
                            System.out.println("Book ID: " + transactionInformation[3]);
                            System.out.println("Book Name: " + transactionInformation[4]);
                            System.out.println("Date of Transaction: " + transactionInformation[5]);

                            break; // Exit the loop once a match is found
                        }
                    }

                    // If no transactions are found with the entered staff ID
                    if (!transactionsFound) {
                        System.out.println("No transactions found linked to the entered Staff ID.");
                    }
                    break;


                case 9:

                    Scanner transactionDateScanner = new Scanner(System.in);
                    System.out.println("Enter Transaction Date to view transactions: ");
                    String enteredTransactionDate = transactionDateScanner.nextLine();

                    // Iterate through the ArrayList to find transactions linked to the entered transaction date
                    boolean transactionsFound1 = false;
                    for (String transactionDetails : Library.MyClass4.getMyArrayList()) {
                        // Assuming each transaction's information is stored as a single string, split it into parts
                        String[] transactionInformation = transactionDetails.split(",");

                        // Check if the array has at least 7 elements (including transaction date)
                        if (transactionInformation.length >= 7 && transactionInformation[5].equals(enteredTransactionDate)) {
                            transactionsFound1 = true;

                            // Display transaction details
                            System.out.println("Transaction Details:");
                            System.out.println("User ID: " + transactionInformation[0]);
                            System.out.println("Username: " + transactionInformation[1]);
                            System.out.println("Staff ID: " + transactionInformation[6]);
                            System.out.println("Staff Name: " + transactionInformation[2]);
                            System.out.println("Book ID: " + transactionInformation[3]);
                            System.out.println("Book Name: " + transactionInformation[4]);
                            System.out.println("Date of Transaction: " + transactionInformation[5]);

                            break; // Exit the loop once a match is found
                        }
                    }

                    // If no transactions are found with the entered transaction date
                    if (!transactionsFound1) {
                        System.out.println("No transactions found linked to the entered Transaction Date.");
                    }

                    break;

                case 10:

                    Books c = new Books();
                    Scanner BooksScanner = new Scanner(System.in);

                    boolean continueAddingBooks = true;

                    while (continueAddingBooks) {


                        System.out.println("Enter Book Name: ");
                        String Book_Name = BooksScanner.nextLine();
                        c.setBook_Name(Book_Name);

                        System.out.println("Enter Title: ");
                        String Title = BooksScanner.nextLine();
                        c.setTitle(Title);

                        System.out.println("Enter Author Name: ");
                        String Author_Name = BooksScanner.nextLine();
                        c.setAuthor_Name(Author_Name);

                        System.out.println("Enter Book id: ");
                        String Book_id = BooksScanner.nextLine();
                        c.setBook_id(Book_id);

                        System.out.println("Enter Date of publication: ");
                        String Date_of_publication = BooksScanner.nextLine();
                        c.setDate_of_publication(Date_of_publication);

                        // Create an instance of MyClass
                        Library.MyClass3 myObject = new Library.MyClass3();

                        // Create a list of elements to add
                        List<String> elementsToAdd = List.of(c.getBook_Name(), c.getTitle(), c.getBook_id(), c.getDate_of_publication(), c.getAuthor_Name());

                        // Join elements into a single comma-separated string
                        String userInformationString = String.join(",", elementsToAdd);

                        // Add the user information to myArrayList using encapsulation
                        myObject.addElements(List.of(userInformationString));

                        System.out.print("Do you want to add another Book? (yes/no): ");
                        String userInput = BooksScanner.nextLine().toLowerCase();
                        continueAddingBooks = userInput.equals("yes");

                    }

                    break;

                    case 11:

                        List<String> list3 = Library.MyClass3.getMyArrayList();
                        for (String i : list3) {
                            System.out.println(i);
                        }

                        break;

                case 12:

                    Scanner BooksAuthorScanner = new Scanner(System.in);
                    System.out.println("Enter author to view Books details: ");
                    String BooksAuthor = BooksAuthorScanner.nextLine();


                    boolean userFound4 = false;
                    for (String userDetails : Library.MyClass3.getMyArrayList()) {

                        String[] userInformation = userDetails.split(",");

                        if (userInformation.length >= 5 && userInformation[4].equals(BooksAuthor)) {
                            userFound4 = true;


                            System.out.println("Book Details:");
                            System.out.println("Book_Name: " + userInformation[0]);
                            System.out.println("Title: " + userInformation[2]);
                            System.out.println("Book_id: " + userInformation[1]);
                            System.out.println("Date_of_publication: " + userInformation[3]);
                            System.out.println("Author_Name: " + userInformation[4]);

                            break;
                        }
                    }


                    if (!userFound4) {
                        System.out.println("User not found with the entered Author Name.");
                    }

                    break;

                case 13:
                    RunAgain = false;
                    break;

            }

        }
    }
}