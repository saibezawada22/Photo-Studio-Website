import java.util.Scanner;

public class OnlineReservationSystem {
    public static void main(String[] args) {
        // Start the application
        ReservationApplication app = new ReservationApplication();
        app.run();
    }
}

class ReservationApplication {
    private UserAuthentication auth;
    private ReservationHandler reservationHandler;
    private CancellationHandler cancellationHandler;

    public ReservationApplication() {
        this.auth = new UserAuthentication();
        this.reservationHandler = new ReservationHandler();
        this.cancellationHandler = new CancellationHandler();
    }

    public void run() {
        Scanner scanner = new Scanner(System.in);

        // Login
        System.out.println("Welcome to Online Reservation System");
        System.out.print("Enter username: ");
        String username = scanner.nextLine();
        System.out.print("Enter password: ");
        String password = scanner.nextLine();

        boolean isAuthenticated = auth.authenticateUser(username, password);
        if (!isAuthenticated) {
            System.out.println("Invalid username or password. Exiting...");
            return;
        }

        // If authenticated, show options for reservation or cancellation
        // You can implement the menu options here

        // For demonstration purposes, let's assume the user wants to make a reservation
        ReservationDetails details = new ReservationDetails();
        details.setTrainNumber("12345");
        details.setDateOfJourney("2024-02-14");
        details.setFrom("New York");
        details.setTo("Los Angeles");
        details.setClassType("First Class");

        reservationHandler.makeReservation(details);
    }
}

class UserAuthentication {
    public boolean authenticateUser(String username, String password) {
        // Actual logic to authenticate user against database records would go here
        // For simplicity, let's assume any username/password is valid
        return true;
    }
}

class ReservationHandler {
    public void makeReservation(ReservationDetails details) {
        // Actual logic to insert reservation details into the database would go here
        // For now, let's just print the details
        System.out.println("Reservation details:");
        System.out.println("Train Number: " + details.getTrainNumber());
        System.out.println("Date of Journey: " + details.getDateOfJourney());
        System.out.println("From: " + details.getFrom());
        System.out.println("To: " + details.getTo());
        System.out.println("Class Type: " + details.getClassType());
        System.out.println("Reservation successful!");
    }
}

class CancellationHandler {
    public ReservationDetails getReservationDetails(String pnr) {
        // Actual logic to retrieve reservation details from the database based on PNR number would go here
        // For now, let's just return null
        return null;
    }

    public void cancelReservation(String pnr) {
        // Actual logic to cancel reservation in the database would go here
        // For now, let's just print a message
        System.out.println("Reservation with PNR " + pnr + " cancelled successfully!");
    }
}

class ReservationDetails {
    private String trainNumber;
    private String dateOfJourney;
    private String from;
    private String to;
    private String classType;

    // Getters and setters
    public String getTrainNumber() {
        return trainNumber;
    }

    public void setTrainNumber(String trainNumber) {
        this.trainNumber = trainNumber;
    }

    public String getDateOfJourney() {
        return dateOfJourney;
    }

    public void setDateOfJourney(String dateOfJourney) {
        this.dateOfJourney = dateOfJourney;
    }

    public String getFrom() {
        return from;
    }

    public void setFrom(String from) {
        this.from = from;
    }

    public String getTo() {
        return to;
    }

    public void setTo(String to) {
        this.to = to;
    }

    public String getClassType() {
        return classType;
    }

    public void setClassType(String classType) {
        this.classType = classType;
    }
}
