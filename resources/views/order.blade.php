<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>DHL Dashboard</title>
</head>
<body class="overflow-hidden overflow-y-auto whitespace-nowrap h-screen text-slate-400 bg-slate-900">
    <button onclick="location.href='{{URL::previous()}}';" type="button"
        class="m-2 mt-4 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-800 shadow-lg shadow-blue-800/80 rounded-lg text-lg md:text-2xl px-3 py-1 font-bold text-center">Back</button>
    <button onclick="location.href='{{route('remove', ['id' => $orderId])}}';" type="button"
        class="m-2 mt-4 text-white bg-gradient-to-r from-red-500 via-red-600 to-red-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-800 shadow-lg shadow-red-800/80 rounded-lg text-lg md:text-2xl px-3 py-1 font-bold text-center">Delete</button>
    <div class="m-5 flex justify-center antialiased text-slate-400 bg-slate-900">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 w-full">
            <div class="overflow-hidden font-mono font-medium p-4 leading-6 text-sky-500 hover:font-black whitespace-nowrap hover:border-slate-200 text-sky-400 border border-slate-100 dark:border-slate-400/10">
                <h2 class="text-center mb-5 text-2xl md:text-5xl p-5 font-mono whitespace-pre text-slate-200 font-black leading-6">Information</h2>
                <h3 class="text-center text-lg md:text-2xl p-1 font-mono whitespace-pre text-sky-400 leading-6">Status: {{$order['status']}}</h3>
                <h3 class="text-center text-lg md:text-2xl p-1 font-mono whitespace-pre text-sky-400 leading-6">Category: {{$order['category']}}</h3>
                <h3 class="text-center text-lg md:text-2xl p-1 font-mono whitespace-pre text-sky-400 leading-6">Package: {{$order['packageType']}}</h3>
            </div>

            <div class="overflow-hidden max-w-auto font-mono font-medium p-4 leading-6 text-sky-500 hover:font-black whitespace-nowrap hover:border-slate-200 text-sky-400 border border-slate-100 dark:border-slate-400/10">
                <h2 class="overflow-hidden mb-5 text-center text-2xl md:text-5xl p-5 font-mono self-start whitespace-pre text-slate-200 font-black leading-6">Destination</h2>
                @if (!empty($order['destination']['name']))
                    <h3 class="text-center text-lg md:text-2xl p-1 font-mono whitespace-pre text-sky-400 leading-6">Name: {{$order['destination']['name']}}</h3>
                @endif
                <h3 class="text-center text-lg md:text-2xl p-1 font-mono whitespace-pre text-sky-400 leading-6">Type: {{$order['destination']['type']}}</h3>
                <h3 class="text-center text-lg md:text-2xl p-1 font-mono whitespace-pre text-sky-400 leading-6">Location: <a class="underline text-blue-600 hover:text-blue-800 visited:text-purple-600" href="https://www.google.com/maps/place/{{$order['destination']['houseNumber']}}+{{$order['destination']['street']}},{{$order['destination']['city']}}" target="blank">Link</a></h3>
            </div>

            <div class="font-mono font-medium p-4 leading-6 text-sky-500 hover:font-black whitespace-nowrap hover:border-slate-200 text-sky-400 border border-slate-100 dark:border-slate-400/10">
                <h2 class="text-center text-2xl md:text-5xl mb-5 p-5 font-mono whitespace-pre text-slate-200 font-black leading-6">Receiver</h2>
                @if (!empty($order['receiver']['name']))
                    <h3 class="text-center text-lg md:text-2xl p-1 font-mono whitespace-pre text-sky-400 leading-6">Name: {{$order['receiver']['name']}}</h3>
                @endif
                @if (!empty($order['receiver']['street']))
                    <h3 class="text-center text-lg md:text-2xl p-1 font-mono whitespace-pre text-sky-400 leading-6">Street: {{$order['receiver']['street']}}</h3>
                @endif
                <h3 class="text-center text-lg md:text-2xl p-1 font-mono whitespace-pre text-sky-400 leading-6">House Number: {{$order['receiver']['houseNumber']}}</h3>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 w-full px-5 md:px-20">
        <h3 class="overflow-hidden max-w-auto font-mono font-medium p-4 leading-6 text-sky-500 hover:font-black whitespace-nowrap hover:border-slate-200 text-sky-400 border border-slate-100 dark:border-slate-400/10 text-center text-lg md:text-2xl p-1 font-mono whitespace-pre text-sky-400 leading-6">Weight: {{$order['weight']}} KG</h3>
        <h3 class="overflow-hidden max-w-auto font-mono font-medium p-4 leading-6 text-sky-500 hover:font-black whitespace-nowrap hover:border-slate-200 text-sky-400 border border-slate-100 dark:border-slate-400/10 text-center text-lg md:text-2xl p-1 font-mono whitespace-pre text-sky-400 leading-6">Timestamp: {{$order['timestamp']}}</h3>
    </div>

    @foreach (array_reverse($order['events']) as $event)
        <div class="grid gap-10 grid-cols-1 md:grid-cols-3 mt-3 w-full px-5 md:px-20">
            <h3 class="overflow-hidden font-mono font-xs p-4 leading-6 text-sky-500 hover:font-black whitespace-nowrap hover:border-slate-200 text-sky-400 border border-slate-100 dark:border-slate-400/10 text-center p-1 font-mono whitespace-pre text-sky-400 leading-6">Category: {{$event['category']}}</h3>
            <h3 class="overflow-hidden font-mono font-xs p-4 leading-6 text-sky-500 hover:font-black whitespace-nowrap hover:border-slate-200 text-sky-400 border border-slate-100 dark:border-slate-400/10 text-center p-1 font-mono whitespace-pre text-sky-400 leading-6">Status: {{$event['status']}}</h3>
            <h3 class="overflow-hidden font-mono font-xs p-4 leading-6 text-sky-500 hover:font-black whitespace-nowrap hover:border-slate-200 text-sky-400 border border-slate-100 dark:border-slate-400/10 text-center p-1 font-mono whitespace-pre text-sky-400 leading-6">Timestamp: {{$event['timestamp']}}</h3>
        </div>
    @endforeach

</body>
</html>
