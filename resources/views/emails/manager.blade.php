Имя: {{ $data['name'] }}
E-mail: {{ $data['email'] }}
Телефон: {{ $data['phone'] }}

{{ $data['text'] }}

Выбранные решения

@foreach($cartSolutions as $item)
    {{ $item->name }}
    {{ $item->description }}

    @foreach($item->functionalities as $functionality)
        - {{ $functionality->name }}
    @endforeach


@endforeach
