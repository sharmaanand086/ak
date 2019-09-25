<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
</head>
<body>

<h2>My Customers</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<session id="myTable">
    <div class="col-md-6 mainbox">
				<div class="book">
					<div class="book-img">
						<img src="img/smb.png">
					</div>
						<p class="book-title">The secret millionaire blueprint</p>
						<p class="book-subtitle">If you want to know how your next 5 years will be like, financially, just look back at your previous 5 years, unless you use the Secret Millionaire Blueprint formula for just 7 days</p>
						<p class="book-desc">This book is so powerful - it will change your financial future even before you finish reading it!! Most people struggle in life, especially when it comes to money and finances. They keep looking for ways to become rich but inevitably fail. What people fail to realize is that everyone is equipped with a unique monetary blueprint which is responsible for financial success or failure.</p>
					<form name="form1" id="form1" action="cart_update.php" method="POST">
                    <input type="hidden" name="product_code" value="PD1001" />
                    <input type="hidden" name="type" value="add" />
                    <input type="hidden" name="return_url" value="" />
                    <input type="hidden" name="product_id" value="" />
                    <input type="hidden" name="cat" value="" />
                    <input name="product_qty" type="hidden" value="1">
					<button>Buy now for Rs. 800 Only</button>
					</form>
				</div>
			</div>
			<div class="col-md-6 mainbox">
				<div class="book">
					<div class="book-img">
						<img src="img/smb.png">
					</div>
						<p class="book-title">The  abc secret millionaire blueprint</p>
						<p class="book-subtitle">If you want to know how your next 5 years will be like, financially, just look back at your previous 5 years, unless you use the Secret Millionaire Blueprint formula for just 7 days</p>
						<p class="book-desc">This book is so powerful - it will change your financial future even before you finish reading it!! Most people struggle in life, especially when it comes to money and finances. They keep looking for ways to become rich but inevitably fail. What people fail to realize is that everyone is equipped with a unique monetary blueprint which is responsible for financial success or failure.</p>
					<form name="form1" id="form1" action="cart_update.php" method="POST">
                    <input type="hidden" name="product_code" value="PD1001" />
                    <input type="hidden" name="type" value="add" />
                    <input type="hidden" name="return_url" value="" />
                    <input type="hidden" name="product_id" value="" />
                    <input type="hidden" name="cat" value="" />
                    <input name="product_qty" type="hidden" value="1">
					<button>Buy now for Rs. 800 Only</button>
					</form>
				</div>
			</div>
</session>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  console.log(table);
  tr = table.getElementsByClassName("mainbox");
  console.log(tr);
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByClassName("book-title")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>
