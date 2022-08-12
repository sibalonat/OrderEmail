
Your order "<b>{{ $order->product_name }}</b>" has been placed <br>
The price you paid for one product was {{ $order->price }} ALL. <br>
For the total of <mark>{{ $order->quantity }}</mark>  you have paid <b> {{ $order->quantity * $order->price }} ALL </b> <br>
Thank you
