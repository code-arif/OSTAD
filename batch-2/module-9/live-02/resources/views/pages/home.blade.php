{{-- @php
    $name = 'Ariful';
    $age = 24;
    $aim = 'Laravel developer';

    $output = "hello I'am Md. {$name}. I am {$age} years old. I want to be a professional {$aim}";
@endphp


<h2>-----------controller data------------
    <br>
    {{ $data }}
</h2>


@include('components.hero', ['output' => $output])
@include('components.productList')
<h1>i am home page</h1> --}}


<ul>
    @foreach ($info as $item)
        <li>Name:{{ $item['name']}} | City:{{ $item['city']}} | Country: {{ $item['country']}}</li>    
    @endforeach
</ul>
