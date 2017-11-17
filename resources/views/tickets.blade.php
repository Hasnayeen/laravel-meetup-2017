@extends('layouts.app')

@section('content')
    <div class="flex flex-col">
        <div class="min-h-screen flex items-start justify-center">
            <div class="flex flex-col justify-around h-full">
                <h1 class="text-grey-darker text-center font-hairline tracking-wide text-7xl mb-6">
                    Tickets
                </h1>

                <div class="w-full max-w-xs">
                  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{ route('purchase') }}">
                    {{ csrf_field() }}

                    <div class="mb-4">
                      <label class="block text-grey-darker text-sm font-bold mb-2" for="email">
                        Email
                      </label>
                      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="email"
                      type="text" placeholder="john@example.com">
                    </div>
                    <div class="mb-4">
                      <label class="block text-grey-darker text-sm font-bold mb-2" for="cc_number">
                        Credit Card Number
                      </label>
                      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="cc_number"
                      type="text" placeholder="6231-4506-2398-4582">
                    </div>
                    <div class="mb-4">
                      <label class="block text-grey-darker text-sm font-bold mb-2" for="expiration_date">
                        Expiration Date
                      </label>
                      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="expiration_date"
                      type="text" placeholder="10/18">
                    </div>
                    <div class="mb-6">
                      <label class="block text-grey-darker text-sm font-bold mb-2" for="cvv">
                        CVV Number
                      </label>
                      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker mb-3" id="cvv"
                      type="password" placeholder="***">
                    </div>
                    <div class="flex items-right justify-end">
                      <button class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded" type="submit">
                        Buy
                      </button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
@endsection
