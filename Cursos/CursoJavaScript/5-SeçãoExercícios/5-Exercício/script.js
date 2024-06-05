class BankAccount {
  constructor(balance_current, balance_savings, current_fees) {
    this.balance_current = balance_current;
    this.balance_savings = balance_savings;
    this.current_fees = current_fees;
  }

  depositCurrent(value) {
    this.balance_current += value;
  }

  depositSavings(value) {
    this.balance_savings += value;
  }

  withdrawCurrent(value) {
    this.balance_current -= value;
  }

  withdrawSavings(value) {
    this.balance_savings -= value;
  }

  transferCurrent(value) {
    this.balance_savings -= value;
    this.balance_current += value;
  }

  transferSavings(value) {
    this.balance_current -= value;
    this.balance_savings += value;
  }

  compoundInterest() {
    let fee = (this.balance_savings * this.current_fees) / 100;
    this.balance_savings += fee;
  }
}

class VipAccount extends BankAccount {
  constructor(balance_current, balance_savings, current_fees) {
    super(balance_current, balance_savings, current_fees * 2);
  }
}

const userCurrentAccount = new BankAccount(1200, 2000, 1);

console.log(userCurrentAccount);

userCurrentAccount.depositCurrent(300);

console.log(userCurrentAccount);

userCurrentAccount.depositSavings(500);

console.log(userCurrentAccount);

userCurrentAccount.transferCurrent(300);

console.log(userCurrentAccount);

userCurrentAccount.transferSavings(300);

console.log(userCurrentAccount);

userCurrentAccount.compoundInterest();

console.log(userCurrentAccount);

let vipAccount = new VipAccount(1200, 2000, 1);

console.log(vipAccount);

vipAccount.depositSavings(500);

console.log(vipAccount);

vipAccount.compoundInterest();

console.log(vipAccount);
