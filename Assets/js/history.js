document.addEventListener('DOMContentLoaded', function() {
    // Dummy transaction data
    const transactions = [
      { type: 'Credit', amount: 5000 },
      { type: 'Debit', amount: -1000 },
      { type: 'Credit', amount: 3000 },
      { type: 'Debit', amount: -2000 }
    ];
  
    const historyDiv = document.getElementById('transaction-history');
  
    // Display transaction history
    transactions.forEach(transaction => {
      const transactionDiv = document.createElement('div');
      transactionDiv.classList.add('transaction');
      if (transaction.amount > 0) {
        transactionDiv.classList.add('credit');
      } else {
        transactionDiv.classList.add('debit');
      }
      transactionDiv.innerHTML = `<p>${transaction.type}: $${Math.abs(transaction.amount)}</p>`;
      historyDiv.appendChild(transactionDiv);
    });
  });
  