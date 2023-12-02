<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

  <p>Thank you for reaching out! Your message has been successfully received. Our team will get back to you shortly.</p>

@if ($details['from'] == 'appointment')
  <h2>Appointment Info </h2>
    
@else
  <h2>Contact Info</h2>
@endif

<table>
  <tr>
    <td>Name</td>
    <td>{{ $details['name'] }}</td>
  </tr>
  <tr>
    <td>Phone Number</td>
    <td>{{ $details['phone_number'] }}</td>
  </tr>
  <tr>
    <td>Email</td>
    <td>{{ $details['email'] }}</td>
  </tr>
  <tr>
    <td>Address</td>
    <td>{{ $details['address'] }}</td>
  </tr>

  @if ($details['from'] == 'appointment')
  <tr>
    <td>Visiting date and time</td>
    <td>{{ $details['visiting_datetime'] }}</td>
  </tr>
  @endif
  
</table>

</body>
</html>

