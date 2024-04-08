<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>DHL Dashboard</title>
</head>

<body class="h-screen text-slate-400 bg-slate-900">
    <button onclick="location.href='{{URL::previous()}}';" type="button"
        class="m-2 mt-4 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none  focus:ring-blue-800 shadow-lg shadow-blue-800/80 rounded-lg text-2xl px-3 py-1 font-bold text-center  ">Back</button>
    <div class="m-5 flex justify-center antialiased text-slate-400 bg-slate-900">
        
        <div class=" grid grid-cols-3 gap-10 h-80 w-[100vw]">
                 <div class="overflow-hidden   font-mono font-medium p-4 leading-6 text-sky-500 hover:font-black whitespace-nowrap hover:border-slate-200 text-sky-400 border border-slate-100 dark:border-slate-400/10">
                    <h2 class="text-center  mb-5  text-5xl p-5 font-mono whitespace-pre text-slate-200  leading-6 font-black">Information</h2>
                <h3 class="text-center text-2xl p-1 font-mono whitespace-pre text-sky-400 leading-6 font-black">Status: {{$order['status']}}</h3>
                <h3 class="text-center text-2xl p-1 font-mono whitespace-pre text-sky-400 leading-6 font-black">Category: {{$order['category']}}</h3>
                <h3 class="text-center text-2xl p-1 font-mono whitespace-pre text-sky-400 leading-6 font-black">Package: {{$order['packageType']}}</h3>
                <h3 class="text-center text-2xl p-1 font-mono whitespace-pre text-sky-400 leading-6 font-black">Weight: {{$order['weight']}}</h3>
                <h3 class="text-center text-2xl p-1 font-mono whitespace-pre text-sky-400 leading-6 font-black">Timestamp: {{$order['timestamp']}}</h3>
       </div>

           <div class="overflow-hidden max-w-auto  font-mono font-medium p-4 leading-6 text-sky-500 hover:font-black whitespace-nowrap hover:border-slate-200 text-sky-400 border border-slate-100 dark:border-slate-400/10">
            <h2 class="overflow-hidden mb-5 text-center text-5xl p-5 font-mono self-start whitespace-pre text-slate-200  leading-6 font-black">Destination</h2>
            <h3 class="text-center text-2xl p-1 font-mono whitespace-pre text-sky-400 leading-6 font-black ">Name: {{$order['destination']['name']}}</h3>
            <h3 class="text-center text-2xl p-1 font-mono whitespace-pre text-sky-400 leading-6 font-black ">Type: {{$order['destination']['type']}}</h3>
            <h3 class="text-center text-2xl p-1 font-mono whitespace-pre text-sky-400 leading-6 font-black ">Location: <a class="underline text-blue-600 hover:text-blue-800 visited:text-purple-600" href="https://www.google.com/maps/place/{{$order['destination']['houseNumber']}}+{{$order['destination']['street']}},{{$order['destination']['city']}}">Link</a></h3>
     </div>
    
             <div class="ont-mono font-medium p-4 leading-6 text-sky-500 hover:font-black whitespace-nowrap hover:border-slate-200 text-sky-400 border border-slate-100 dark:border-slate-400/10">
                <h2 class="text-center text-5xl  mb-5  p-5 font-mono whitespace-pre text-slate-200  leading-6 font-black">Receiver</h2>
                <h3 class="text-center text-2xl p-1 font-mono whitespace-pre text-sky-400 leading-6 font-black">Name: {{$order['receiver']['name']}}</h3>
                <h3 class="text-center text-2xl p-1 font-mono whitespace-pre text-sky-400 leading-6 font-black">Street: {{$order['receiver']['street']}}</h3>
                <h3 class="text-center text-2xl p-1 font-mono whitespace-pre text-sky-400 leading-6 font-black">House Number: {{$order['receiver']['houseNumber']}}</h3>
             </div>
    </div>
</body>

</html>
