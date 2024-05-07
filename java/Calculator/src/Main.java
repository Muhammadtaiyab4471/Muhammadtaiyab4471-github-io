import java.util.ArrayList;
import java.util.Collections;
import java.util.Scanner;

public class Main {

    public static void main(String[] args) {

        // Predefined username and password
        String username = "Admin";
        int password = 12345;

        // Create a Scanner object to read user input
        Scanner scanner = new Scanner(System.in);

        // Prompt the user to enter their username
        System.out.println("Enter UserName: ");
        String user = scanner.nextLine();

        // Prompt the user to enter their password
        System.out.println("Enter Password: ");
        int userPassword = scanner.nextInt();

        // Check if the entered username and password match the predefined values
        if (username.equals(user) && password == userPassword) {
            System.out.println("Welcome");
            System.out.println("Menu");
            System.out.println("1) Basic operators");
            System.out.println("2) Find Odd or Even");
            System.out.println("3) Minimum, Maximum and Average");
            System.out.println("4) HCF and LCM");
            System.out.println("5) Fibonacci series");
            System.out.println("6) Conversion From Decimal to Binary, Octal, hexadecimal and vice versa");
            System.out.println("7) Calculate Area, Perimeter and Volume");

            // Create a new Scanner object to read the user's option
            Scanner optionScanner = new Scanner(System.in);
            System.out.println("Choose your option");

            // Read the user's selected option
            int option = optionScanner.nextInt();

            // Process the user's choice using a switch statement
            switch (option) {
                // Cases for different options go here
                case 1:

                    // Create a Scanner object to read input from the user
                    Scanner scanner1 = new Scanner(System.in);

                    // Prompt the user to enter the first number
                    System.out.print("Enter number 1: ");
                    double result = scanner1.nextDouble();

                    // Loop to perform operations on the remaining numbers
                    int i2 = 2; // Start with the second number
                    while (true) {
                        // Prompt the user to enter the next number
                        System.out.print("Enter number " + i2 + " (enter 999 to calculate and exit): ");
                        double nextNumber = scanner.nextDouble();

                        // Check if the user wants to calculate and exit
                        if (nextNumber == 999) {
                            break;
                        }

                        // Prompt the user to select an operation
                        System.out.print("Select operation (+, -, *, /): ");
                        char operation = scanner.next().charAt(0);

                        // Perform the selected operation
                        switch (operation) {
                            case '+':
                                result += nextNumber;
                                break;
                            case '-':
                                result -= nextNumber;
                                break;
                            case '*':
                                result *= nextNumber;
                                break;
                            case '/':
                                // Check for division by zero
                                if (nextNumber != 0) {
                                    result /= nextNumber;
                                } else {
                                    System.out.println("Error: Division by zero. Exiting program.");
                                    System.exit(1); // Terminate the program due to an error
                                }
                                break;
                            default:
                                System.out.println("Invalid operation. Exiting program.");
                                System.exit(1); // Terminate the program due to an error
                        }

                        i2++; // Increment the counter for the next number
                    }

                    // Close the scanner to prevent resource leaks
                    scanner.close();

                    // Display the final result
                    System.out.println("The result is: " + result);

                    break;

                case 2:

                    Scanner obj3 =new Scanner(System.in);
                    // Prompt the user to enter a number
                    System.out.println("Odd or Even");
                    int n;
                    System.out.println("Enter your number");
                    n = obj3.nextInt();

                    // Check if the entered number is even or odd
                    if (n % 2 == 0) {
                        System.out.println("Even Number");
                    } else {
                        System.out.println("Odd number");
                    }
                    break;

                case 3:

                    // Initialize variables for calculations
                    int num = 0;
                    int sum = 0;
                    int avg = 0;
                    int i = 0;

                    // Create an ArrayList to store user input numbers
                    ArrayList<Integer> array = new ArrayList<Integer> ();

                    // Create a Scanner object for user input
                    Scanner input = new Scanner (System.in);

                    // Prompt the user to enter the number of elements in the list
                    System.out.println("how many numbers will be there in the list: ");
                    int list = input.nextInt();

                    // Loop to get user input for the specified number of elements
                    for (i = 0; i < list; ++i){

                        // Prompt the user to enter a number
                        System.out.println("Enter a number");
                        num = input.nextInt();

                        // Add the entered number to the ArrayList
                        array.add(num);

                        // Calculate the sum of entered numbers
                        sum += num;
                    }

                    // Calculate the average of entered numbers
                    avg = sum / i;

                    // Display the sum, average, minimum, and maximum
                    System.out.println("Sum: " + sum);
                    System.out.println("Average: " + avg);
                    System.out.println("Maximum: " + Collections.max(array));
                    System.out.println("Minimum: " + Collections.min(array));

                    break;

                case 4:

                    // Display options for HCF and LCM
                    System.out.println("1) HCF");
                    System.out.println("2) LCM");
                    System.out.println("Choose your option: ");

                    // Create a Scanner object to get user input
                    Scanner opt4 = new Scanner(System.in);
                    int Option4 = opt4.nextInt();

                    // Switch based on the user's choice
                    switch (Option4) {

                        case 1:
                            // Calculate HCF (Highest Common Factor)
                            Scanner opp = new Scanner(System.in);
                            System.out.println("Enter any two numbers: ");
                            int a1 = opp.nextInt();
                            int a2 = opp.nextInt();
                            int hcf = 0;

                            // Loop to find the HCF
                            for (int x = 1; x <= a1 && x <= a2; x++) {
                                if (a1 % x == 0 && a2 % x == 0)
                                    hcf = x;
                            }
                            System.out.println("HCF = " + hcf);
                            break;

                        case 2:
                            // Calculate LCM (Least Common Multiple)
                            int n1, n2;
                            System.out.println("Enter two numbers: ");
                            n1 = opt4.nextInt();
                            n2 = opt4.nextInt();

                            // Find the maximum of the two numbers
                            int lcm = (n1 > n2) ? n1 : n2;

                            // Loop to find the LCM
                            while (true) {
                                if (lcm % n1 == 0 && lcm % n2 == 0) {
                                    System.out.println("LCM = " + lcm);
                                    break;
                                }
                                ++lcm;
                            }
                            break;
                    }


                    break;

                case 5:

                    // Initialize variables for Fibonacci series
                    int term, a = 0, b = 1, c;

                    // Prompt the user to enter the number of terms in the Fibonacci series
                    System.out.println("Enter term");
                    Scanner fib = new Scanner(System.in);
                    term = fib.nextInt();

                    // Loop to generate and print Fibonacci series
                    for (int p = 1; p <= term; p++) {
                        // Print the current Fibonacci number
                        System.out.print(a + " ");

                        // Update variables for the next Fibonacci numbers
                        c = a + b;
                        a = b;
                        b = c;
                    }


                    break;


                case 6:

                    // Display options for number system conversion
                    System.out.println("1) Decimal to Binary");
                    System.out.println("2) Decimal to Octal");
                    System.out.println("3) Decimal to Hexadecimal");
                    System.out.println("4) Binary to Decimal");
                    System.out.println("5) Octal to Decimal");
                    System.out.println("6) Hexadecimal to Decimal");

                    // Create a Scanner object to get user input
                    Scanner con = new Scanner(System.in);
                    System.out.println("Choose your option: ");
                    int option6 = con.nextInt();

                    // Switch based on the user's choice for number system conversion
                    switch (option6) {

                        case 1:
                            // Decimal to Binary conversion
                            System.out.println("Decimal to Binary");
                            System.out.println("Enter Decimal number: ");
                            int Deci1 = con.nextInt();
                            String binaryResult = Integer.toBinaryString(Deci1);
                            System.out.println("Binary = " + binaryResult);
                            break;

                        case 2:
                            // Decimal to Octal conversion
                            System.out.println("Decimal to Octal");
                            System.out.println("Enter Decimal number: ");
                            int Deci2 = con.nextInt();
                            String octalResult = Integer.toOctalString(Deci2);
                            System.out.println("Octal = " + octalResult);
                            break;

                        case 3:
                            // Decimal to Hexadecimal conversion
                            System.out.println("Decimal to Hexadecimal");
                            System.out.println("Enter Decimal number: ");
                            int Deci3 = con.nextInt();
                            String hexResult = Integer.toHexString(Deci3);
                            System.out.println("Hexadecimal = " + hexResult);
                            break;

                        case 4:
                            // Binary to Decimal conversion
                            System.out.println("Binary to Decimal");
                            System.out.println("Enter Binary number: ");
                            String Bina1 = con.next();
                            int binaryToDecimalResult = Integer.parseInt(Bina1, 2);
                            System.out.println("Decimal = " + binaryToDecimalResult);
                            break;

                        case 5:
                            // Octal to Decimal conversion
                            System.out.println("Octal to Decimal");
                            System.out.println("Enter Octal number: ");
                            String Bina2 = con.next();
                            int octalToDecimalResult = Integer.parseInt(Bina2, 8);
                            System.out.println("Decimal = " + octalToDecimalResult);
                            break;

                        case 6:
                            // Hexadecimal to Decimal conversion
                            System.out.println("Hexadecimal to Decimal");
                            System.out.println("Enter Hexadecimal number: ");
                            String Bina3 = con.next();
                            int hexToDecimalResult = Integer.parseInt(Bina3, 16);
                            System.out.println("Decimal = " + hexToDecimalResult);
                            break;

                    }


                    break;

                case 7:

                    // Display options for geometric calculations
                    System.out.println("Calculate area, perimeter and volume");
                    System.out.println("1) Square");
                    System.out.println("2) Rectangle");
                    System.out.println("3) Triangle");
                    System.out.println("4) Circle");

                    // Create a Scanner object to get user input
                    Scanner ara = new Scanner(System.in);
                    System.out.println("Choose your option");
                    int option7 = ara.nextInt();

                    // Switch based on the user's choice of geometric shape
                    switch (option7) {

                        case 1:
                            // Square calculations
                            System.out.println("1) Area");
                            System.out.println("2) Perimeter");
                            System.out.println("3) Volume");

                            System.out.println("Choose your option");
                            int c1 = ara.nextInt();

                            switch (c1) {

                                case 1:
                                    // Calculate square area
                                    System.out.println("Enter Length: ");
                                    int squareLength = ara.nextInt();
                                    int squareArea = squareLength * squareLength;
                                    System.out.println("Area = " + squareArea);
                                    break;

                                case 2:
                                    // Calculate square perimeter
                                    System.out.println("Enter Length: ");
                                    int squareLength2 = ara.nextInt();
                                    int squarePerimeter = squareLength2 * 4;
                                    System.out.println("Perimeter = " + squarePerimeter);
                                    break;

                                case 3:
                                    // Calculate cube volume
                                    System.out.println("Enter Length: ");
                                    int cubeLength = ara.nextInt();
                                    int cubeVolume = cubeLength * cubeLength * cubeLength;
                                    System.out.println("Cube Volume = " + cubeVolume);
                                    break;
                            }
                            break;

                        case 2:
                            // Rectangle calculations
                            System.out.println("1) Area");
                            System.out.println("2) Perimeter");
                            System.out.println("3) Volume");

                            System.out.println("Choose your option");
                            int c2 = ara.nextInt();

                            switch (c2) {

                                case 1:
                                    // Calculate rectangle area
                                    System.out.println("Enter Length: ");
                                    int rectangleLength = ara.nextInt();
                                    System.out.println("Enter Width: ");
                                    int rectangleWidth = ara.nextInt();
                                    int rectangleArea = rectangleLength * rectangleWidth;
                                    System.out.println("Rectangle Area = " + rectangleArea);
                                    break;

                                case 2:
                                    // Calculate rectangle perimeter
                                    System.out.println("Enter Length: ");
                                    int rectangleLength2 = ara.nextInt();
                                    System.out.println("Enter Width: ");
                                    int rectangleWidth2 = ara.nextInt();
                                    int rectanglePerimeter = (rectangleLength2 * 2) + (rectangleWidth2 * 2);
                                    System.out.println("Rectangle Perimeter = " + rectanglePerimeter);
                                    break;

                                case 3:
                                    // Calculate cuboid volume
                                    System.out.println("Enter Length: ");
                                    int rectangleLength3 = ara.nextInt();
                                    System.out.println("Enter Width: ");
                                    int rectangleWidth3 = ara.nextInt();
                                    System.out.println("Enter Height: ");
                                    int rectangleHeight = ara.nextInt();
                                    int cuboidVolume = rectangleLength3 * rectangleWidth3 * rectangleHeight;
                                    System.out.println("Cuboid Volume = " + cuboidVolume);
                                    break;
                            }
                            break;

                        case 3:
                            // Triangle calculations
                            System.out.println("1) Area");
                            System.out.println("2) Perimeter");
                            System.out.println("3) Volume");

                            System.out.println("Choose your option");
                            int c3 = ara.nextInt();

                            switch (c3) {

                                case 1:
                                    // Calculate triangle area
                                    System.out.println("Enter Base length: ");
                                    int triangleBase = ara.nextInt();
                                    System.out.println("Enter Height: ");
                                    int triangleHeight = ara.nextInt();
                                    double triangleArea = (triangleBase * triangleHeight * 0.5);
                                    System.out.println("Triangle Area = " + triangleArea);
                                    break;

                                case 2:
                                    // Calculate triangle perimeter
                                    System.out.println("Enter Base length: ");
                                    int triangleBase2 = ara.nextInt();
                                    System.out.println("Enter Height: ");
                                    int triangleHeight2 = ara.nextInt();
                                    System.out.println("Enter Length: ");
                                    int triangleLength = ara.nextInt();
                                    int trianglePerimeter = triangleBase2 + triangleHeight2 + triangleLength;
                                    System.out.println("Triangle Perimeter = " + trianglePerimeter);
                                    break;

                                case 3:
                                    // Calculate cone volume
                                    System.out.println("Enter Radius: ");
                                    int coneRadius = ara.nextInt();
                                    System.out.println("Enter Height: ");
                                    int coneHeight2 = ara.nextInt();
                                    double coneVolume = ((0.333) * (3.14) * (coneRadius * coneRadius) * (coneHeight2));
                                    System.out.println("Cone Volume = " + coneVolume);
                                    break;
                            }
                            break;

                        case 4:
                            // Circle calculations
                            System.out.println("1) Area");
                            System.out.println("2) Perimeter");
                            System.out.println("3) Volume");

                            System.out.println("Choose your option");
                            int c4 = ara.nextInt();

                            switch (c4) {

                                case 1:
                                    // Calculate circle area
                                    System.out.println("Enter Radius: ");
                                    int circleRadius = ara.nextInt();
                                    double circleArea = ((3.14) * (circleRadius * circleRadius));
                                    System.out.println("Circle Area = " + circleArea);
                                    break;

                                case 2:
                                    // Calculate circle perimeter
                                    System.out.println("Enter Radius: ");
                                    int circleRadius2 = ara.nextInt();
                                    double circlePerimeter = (2 * (3.14) * circleRadius2);
                                    System.out.println("Circle Perimeter = " + circlePerimeter);
                                    break;

                                case 3:
                                    // Calculate sphere volume
                                    System.out.println("Enter Radius: ");
                                    int circleRadius3 = ara.nextInt();
                                    double sphereVolume = ((1.333) * (3.14) * (circleRadius3 * circleRadius3 * circleRadius3));
                                    System.out.println("Sphere Volume = " + sphereVolume);
                                    break;
                            }
                            break;
                    }

                    break;
            }

        } else {
            //Error Display
            System.out.println("wrong details entered");
        }
    }
}