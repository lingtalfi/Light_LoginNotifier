[Back to the Ling/Light_LoginNotifier api](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier.md)<br>
[Back to the Ling\Light_LoginNotifier\Api\Generated\Classes\ConnexionApi class](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/Classes/ConnexionApi.md)


ConnexionApi::insertConnexions
================



ConnexionApi::insertConnexions — Inserts the given connexion rows in the database.




Description
================


public [ConnexionApi::insertConnexions](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/Classes/ConnexionApi/insertConnexions.md)(array $connexions, ?bool $ignoreDuplicate = true, ?bool $returnRic = false) : mixed




Inserts the given connexion rows in the database.
By default, it returns an array of the result of the PDO::lastInsertId method for each insert.
If the returnRic flag is set to true, the method will return an array of the ric array (for each insert) instead of the lastInsertId.


If the rows you're trying to insert triggers a duplicate error, the behaviour of this method depends on
the ignoreDuplicate flag:
- if true, the error will be caught internally, the return of the method is not affected
- if false, the error will not be caught, and depending on your configuration, it might either
         trigger an exception, or fail silently in which case this method returns false.




Parameters
================


- connexions

    

- ignoreDuplicate

    

- returnRic

    


Return values
================

Returns mixed.


Exceptions thrown
================

- [Exception](http://php.net/manual/en/class.exception.php).&nbsp;







Source Code
===========
See the source code for method [ConnexionApi::insertConnexions](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/Api/Generated/Classes/ConnexionApi.php#L98-L109)


See Also
================

The [ConnexionApi](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/Classes/ConnexionApi.md) class.

Previous method: [insertConnexion](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/Classes/ConnexionApi/insertConnexion.md)<br>Next method: [fetchAll](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/Classes/ConnexionApi/fetchAll.md)<br>

