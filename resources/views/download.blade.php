

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Checkpoint</title>
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    

   
    </style>
</head>

<body>
    {{-- {{dd(session('data')) }} --}}
    <div class="invoice-box">
            
                <div>Funeral</div>
                <div style="float: right;">{{$data->created_at->format('d M Y')}}</div>
                
            
            <div style="text-align:center;">
                <h3>Thank You {{$data->name}} For donating</h3> 
               <p> You have made a payment of ${{$data->amount}} to {{$data->receiver}} </p>
                
            </div>
    </div>

    
</body>
</html>


