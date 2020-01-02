@php
    $user_menus=\App\UserMenu::where('Role_id',Auth::user()->Role)
                               ->where('Department_id',Auth::user()->Department)
                                ->get(['Url', 'MenuItem']);
@endphp
