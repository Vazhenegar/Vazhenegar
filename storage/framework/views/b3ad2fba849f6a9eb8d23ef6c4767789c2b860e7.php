
<?php
    $CurrentUser=Auth::user();
    $Role=$CurrentUser->role()->value('RoleName');
    $CurrentUser->Mode='ON'; $CurrentUser->save();
    $UserFullName=$CurrentUser->FirstName .' '. $CurrentUser->LastName;
    $UserStatus=$CurrentUser->Status;
    $UserMode=$CurrentUser->Mode;
    $Menus=(new App\Http\Controllers\HomeController)->MenuPicker($CurrentUser);

 // for admin badges
        $employmentRequest=NewEmployment();
        $OnlineUsers=OnlineUsers();
        $DailyVisitors=(new App\Session)->GetSiteVisitors(1);

//  for user badges

?>
<?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views/vazhenegar/UserIdentifier.blade.php ENDPATH**/ ?>