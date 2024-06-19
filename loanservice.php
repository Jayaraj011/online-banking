<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>Loan Service</title>
  <link rel="stylesheet" href="Assets/css/loan.css">
</head>
<body>

  <div class="container">
    <h1>Loan </h1>
    <form id="loan-form">
      <div class="form-group">
        <label for="loan-amount">Loan Amount ($)</label>
        <input type="number" id="loan-amount"  required>
      </div>
      <div class="form-group">
        <label for="interest-rate">Interest Rate (%)</label>
        <input type="number" id="interest-rate" step="0.01" >
      </div>
      <div class="form-group">
        <label for="loan-term">Loan Term (Years)</label>
        <input type="number" id="loan-term" required>
      </div>
      <button type="submit">Calculate</button>
    </form>
    <div id="results"></div>
  </div>
  <script src="Assets/js/loan.js"></script>
</body>
</html>
