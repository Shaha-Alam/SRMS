

@extends('backend.master')

@section('content')

<form class="print_order">
        <input class="btn btn-primary" type="button" onClick="PrintDiv();" value="Print">
    </form>

    <div id="divToPrint">

<h1>Product Details</h1>
      <p><img src = "{{url('/uploads/'.$products->image)}}" alt="image" width="100px"></p>
      <dl class="row">
      <dt class="col-sm-2">Serial:</dt>
      <dd class="col-sm-2">{{($products->serial)}}</dd>
      </dl>
      <dl class="row">
      <dt class="col-sm-2">Name:</dt>
      <dd class="col-sm-2">{{($products->name)}}</dd>
      </dl>
      <dl class="row">
      <dt class="col-sm-2">Category:</dt>
      <dd class="col-sm-2">{{($products->category)}}</dd>
      </dl>
      <dl class="row">
      <dt class="col-sm-2">Quantity:</dt>
      <dd class="col-sm-2">{{($products->quantity)}}</dd>
      </dl>
      <dl class="row">
      <dt class="col-sm-2">Unit Price:</dt>
      <dd class="col-sm-2">{{($products->unit_price)}}</dd>
      </dl>
      <dl class="row">
      <dt class="col-sm-2">Status:</dt>
      <dd class="col-sm-2">{{($products->status)}}</dd>
      </dl>
      <dl class="row">
      <dt class="col-sm-2">Action:</dt>
      <dd class="col-sm-2">{{($products->action)}}</dd>
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