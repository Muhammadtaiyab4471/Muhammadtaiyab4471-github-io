import java.util.ArrayList;
import java.util.List;
public class Account {
    private double CheckingBalance;
    private List<String> CheckingTransaction = new ArrayList<>();

    private double SavingBalance;


    public void deposit(double amount) {
        this.CheckingBalance += amount;
    }

    public void Withdraw(double amount) {
        this.CheckingBalance -= amount;
    }

    public double getCheckingBalance() {
        return CheckingBalance;
    }

    public void setCheckingTransaction(String CheckingAmount) {
        CheckingTransaction.add(CheckingAmount);
    }

    public List<String> getCheckingTransaction() {
        return CheckingTransaction;
    }


    // Saving
    public void SavingDeposit(double amount) {
        this.SavingBalance += amount;
    }

    public void SavingWithdraw(double amount) {
        this.SavingBalance -= amount;
    }
    public double getSavingBalance() {
        return SavingBalance;
    }
}

