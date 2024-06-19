document.getElementById('loan-form').addEventListener('submit', function(e) {
    e.preventDefault();
  
    // Get form values
    const loanAmount = parseFloat(document.getElementById('loan-amount').value);
    const interestRate = parseFloat(document.getElementById('interest-rate').value) / 100 / 12;
    const loanTerm = parseFloat(document.getElementById('loan-term').value) * 12;
  
    // Calculate monthly payment
    const x = Math.pow(1 + interestRate, loanTerm);
    const monthlyPayment = (loanAmount * x * interestRate) / (x - 1);
  
    // Display results
    const resultsDiv = document.getElementById('results');
    resultsDiv.innerHTML = `<h2>Results</h2><p>Monthly Payment: $${monthlyPayment.toFixed(2)}</p>`;
  });
  