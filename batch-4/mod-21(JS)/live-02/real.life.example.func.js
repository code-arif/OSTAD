//regular function
/*
const account = {
    balance: 0,
    deposit: function (amount) {
        this.balance += amount;
    },
    withdraw: function (amount) {
        if (this.balance >= amount) {
            this.balance -= amount;
        }else{
            console.log("Insufficient balance");
        }
    },
    getBalance: function () {
        return this.balance
    }
};
*/

//same function using arrow function
const account = {
    balance: 0,
    deposit: (amount) => {
        account.balance += amount;
    },
    withdraw: (amount) => {
        if (account.balance >= amount) {
            account.balance -= amount;
        } else {
            console.log("Insufficient balance");
        }
    },
    getBalance: () => {
        return account.balance
    }
}

account.deposit(0);
account.withdraw(500);
console.log(account.getBalance());