import java.util.ArrayList;
import java.util.List;

public class User {
    private String fullName;
    private String dateOfBirth;
    private String password;
    private String phoneNumber;
    private String idNumber;
    private String RegID;
    private String email;

    private List<String> UserDetails = new ArrayList<>();

    public void setUserDetails(List<String> elements) {
        UserDetails.addAll(elements);
    }

    public List<String> getUserDetails() {
        return UserDetails;
}

    public String getFullName() {
        return fullName;
    }

    public void setFullName(String fullName) {
        this.fullName = fullName;
    }

    public String getDateOfBirth() {
        return dateOfBirth;
    }

    public void setDateOfBirth(String dateOfBirth) {
        this.dateOfBirth = dateOfBirth;
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public String getPhoneNumber() {
        return phoneNumber;
    }

    public void setPhoneNumber(String phoneNumber) {
        this.phoneNumber = phoneNumber;
    }

    public String getIdNumber() {
        return idNumber;
    }

    public void setIdNumber(String idNumber) {
        this.idNumber = idNumber;
    }

    public String getRegID() {
        return RegID;
    }

    public void setRegID(String RegID) {
        this.RegID = RegID;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }
}