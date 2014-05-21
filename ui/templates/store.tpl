~foreach $storeData as $storeNo => $storeDetails`
    ~foreach $storeDetails as $storeKey => $storeValue`
       ~$storeKey`---~$storeValue`<br>
    ~/foreach`
    <hr>
~/foreach`