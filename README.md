# toast-with-cheese
toast snippet for laravel session

1- add to layouts.app:
```
@include('layouts.toast-with-cheese')
@stack('scripts')
```
2- use: 
```
$request->session()->flash('info', 'Task was successful!');
```
