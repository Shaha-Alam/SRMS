

@extends('backend.master')

@section('content')

<form class="print_order">
        <input class="btn btn-primary" type="button" onClick="PrintDiv();" value="Print">
    </form>

    <div id="divToPrint">

<h1>Employee Details</h1>
      <p><img src = "{{url('/uploads/'.$employees->employee_image)}}" alt="employee image" width="100px"></p>
      <dl class="row">
      <dt class="col-sm-2">Username:</dt>
      <dd class="col-sm-2">{{($employees->serial)}}</dd>
      </dl>
      <dl class="row">
      <dt class="col-sm-2">Email:</dt>
      <dd class="col-sm-2">{{($employees->employee_name)}}</dd>
      </dl>
      <dl class="row">
      <dt class="col-sm-2">Address:</dt>
      <dd class="col-sm-2">{{($employees->email_address)}}</dd>
      </dl>
      <dl class="row">
      <dt class="col-sm-2">Designation:</dt>
      <dd class="col-sm-2">{{($employees->contact_number)}}</dd>
      </dl>
      <dl class="row">
      <dt class="col-sm-2">Phone Number:</dt>
      <dd class="col-sm-2">{{($employees->gender)}}</dd>
      </dl>
      
      
@endsection

<script language="javascript">
    function PrintDiv() {
        var divToPrint = document.getElementById('divToPrint');
        var popupWin = window.open('', '_blank', 'width=1100,height=700');
        popupWin.document.open();
        popupWin.document.write('<html><head><link href="http://127.0.0.1:8000/Backend/css/style.css" rel="stylesheet"></head><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
</script>

































