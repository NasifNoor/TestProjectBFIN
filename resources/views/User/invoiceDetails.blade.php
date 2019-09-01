<a href="/viewInvoice" style="">Back</a>
<h1> Invoice</h1>
<hr>
<table >
	<tr class="text-left">
		<td>Date: </td>
		<td>{{$inv['date']}}</td>
	</tr>
	<tr class="text-left">
		<td>Email: </td>
		<td>{{$inv['customeremail']}}</td>
	</tr>
	<tr class="text-left">
		<td>Invoice Id: </td>
		<td>{{$inv['id']}}</td>
	</tr>
</table><br><br>



<table >
	<tr class="text-center">
		<td><b>Product Id </b></td>
		<td><b>Quantity</b></td>
		<td><b>Unit Price </b></td>
		<td><b>Discount </b></td>
		<td><b>Total </b></td>
	</tr>
	<tr class="text-center">
		<td>{{$inv['productid']}}</td>
		<td>each {{$inv['quantity']}}</td>
		<td>{{$inv['unitprice']}}</td>
		<td>{{$inv['discount']}}%</td>
		<td>{{$inv['amount']}}</td>
	</tr>
	<tr class="text-center">
	</tr>
	<tr class="text-center">
	</tr>
	<tr class="text-center">
	</tr>
	<tr class="text-center">
		<td></td>
		<td></td>
		<td></td>
		<td>Shipping</td>
		<td>0.00</td>
	</tr>
	<tr class="text-center">
	</tr>
	<tr class="text-center">
	</tr>
	<tr class="text-center">
	</tr>
	<tr class="text-center">
		<td></td>
		<td></td>
		<td></td>
		<td>Total Ammount = </td>
		<td>{{$inv['amount']}}</td>
	</tr>
</table>
