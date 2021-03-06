[Back to the Ling/Light_LoginNotifier api](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier.md)



The ConnexionApiInterface class
================
2020-11-27 --> 2021-06-25






Introduction
============

The ConnexionApiInterface interface.
It implements the [ling standard object methods](https://github.com/lingtalfi/Light_BreezeGenerator/blob/master/doc/pages/ling-standard-object-methods.md) concept.



Class synopsis
==============


abstract class <span class="pl-k">ConnexionApiInterface</span>  {

- Methods
    - abstract public [insertConnexion](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/Interfaces/ConnexionApiInterface/insertConnexion.md)(array $connexion, ?bool $ignoreDuplicate = true, ?bool $returnRic = false) : mixed
    - abstract public [insertConnexions](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/Interfaces/ConnexionApiInterface/insertConnexions.md)(array $connexions, ?bool $ignoreDuplicate = true, ?bool $returnRic = false) : mixed
    - abstract public [fetchAll](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/Interfaces/ConnexionApiInterface/fetchAll.md)(?array $components = []) : array
    - abstract public [fetch](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/Interfaces/ConnexionApiInterface/fetch.md)(?array $components = []) : array
    - abstract public [getConnexionById](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/Interfaces/ConnexionApiInterface/getConnexionById.md)(int $id, ?$default = null, ?bool $throwNotFoundEx = false) : mixed
    - abstract public [getConnexion](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/Interfaces/ConnexionApiInterface/getConnexion.md)($where, ?array $markers = [], ?$default = null, ?bool $throwNotFoundEx = false) : mixed
    - abstract public [getConnexions](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/Interfaces/ConnexionApiInterface/getConnexions.md)($where, ?array $markers = []) : array
    - abstract public [getConnexionsColumn](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/Interfaces/ConnexionApiInterface/getConnexionsColumn.md)(string $column, $where, ?array $markers = []) : array
    - abstract public [getConnexionsColumns](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/Interfaces/ConnexionApiInterface/getConnexionsColumns.md)($columns, $where, ?array $markers = []) : array
    - abstract public [getConnexionsKey2Value](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/Interfaces/ConnexionApiInterface/getConnexionsKey2Value.md)(string $key, string $value, $where, ?array $markers = []) : array
    - abstract public [getAllIds](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/Interfaces/ConnexionApiInterface/getAllIds.md)() : array
    - abstract public [updateConnexionById](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/Interfaces/ConnexionApiInterface/updateConnexionById.md)(int $id, array $connexion, ?array $extraWhere = [], ?array $markers = []) : void
    - abstract public [updateConnexion](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/Interfaces/ConnexionApiInterface/updateConnexion.md)(array $connexion, ?$where = null, ?array $markers = []) : void
    - abstract public [delete](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/Interfaces/ConnexionApiInterface/delete.md)(?$where = null, ?array $markers = []) : false | int
    - abstract public [deleteConnexionById](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/Interfaces/ConnexionApiInterface/deleteConnexionById.md)(int $id) : void
    - abstract public [deleteConnexionByIds](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/Interfaces/ConnexionApiInterface/deleteConnexionByIds.md)(array $ids) : void

}






Methods
==============

- [ConnexionApiInterface::insertConnexion](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/Interfaces/ConnexionApiInterface/insertConnexion.md) &ndash; Inserts the given connexion in the database.
- [ConnexionApiInterface::insertConnexions](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/Interfaces/ConnexionApiInterface/insertConnexions.md) &ndash; Inserts the given connexion rows in the database.
- [ConnexionApiInterface::fetchAll](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/Interfaces/ConnexionApiInterface/fetchAll.md) &ndash; Returns the rows corresponding to given components.
- [ConnexionApiInterface::fetch](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/Interfaces/ConnexionApiInterface/fetch.md) &ndash; Returns the first row corresponding to given components, or false if there is no match.
- [ConnexionApiInterface::getConnexionById](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/Interfaces/ConnexionApiInterface/getConnexionById.md) &ndash; Returns the connexion row identified by the given id.
- [ConnexionApiInterface::getConnexion](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/Interfaces/ConnexionApiInterface/getConnexion.md) &ndash; Returns the connexion row identified by the given [where conditions](https://github.com/lingtalfi/SimplePdoWrapper#the-where-conditions).
- [ConnexionApiInterface::getConnexions](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/Interfaces/ConnexionApiInterface/getConnexions.md) &ndash; Returns the connexion rows identified by the given [where conditions](https://github.com/lingtalfi/SimplePdoWrapper#the-where-conditions).
- [ConnexionApiInterface::getConnexionsColumn](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/Interfaces/ConnexionApiInterface/getConnexionsColumn.md) &ndash; identified by the given [where conditions](https://github.com/lingtalfi/SimplePdoWrapper#the-where-conditions).
- [ConnexionApiInterface::getConnexionsColumns](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/Interfaces/ConnexionApiInterface/getConnexionsColumns.md) &ndash; Returns a subset of the connexion rows identified by the given [where conditions](https://github.com/lingtalfi/SimplePdoWrapper#the-where-conditions).
- [ConnexionApiInterface::getConnexionsKey2Value](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/Interfaces/ConnexionApiInterface/getConnexionsKey2Value.md) &ndash; Returns an array of $key => $value from the connexion rows identified by the given [where conditions](https://github.com/lingtalfi/SimplePdoWrapper#the-where-conditions).
- [ConnexionApiInterface::getAllIds](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/Interfaces/ConnexionApiInterface/getAllIds.md) &ndash; Returns an array of all connexion ids.
- [ConnexionApiInterface::updateConnexionById](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/Interfaces/ConnexionApiInterface/updateConnexionById.md) &ndash; Updates the connexion row identified by the given id.
- [ConnexionApiInterface::updateConnexion](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/Interfaces/ConnexionApiInterface/updateConnexion.md) &ndash; Updates the connexion row.
- [ConnexionApiInterface::delete](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/Interfaces/ConnexionApiInterface/delete.md) &ndash; Deletes the connexion rows matching the given where conditions, and returns the number of deleted rows.
- [ConnexionApiInterface::deleteConnexionById](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/Interfaces/ConnexionApiInterface/deleteConnexionById.md) &ndash; Deletes the connexion identified by the given id.
- [ConnexionApiInterface::deleteConnexionByIds](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/Interfaces/ConnexionApiInterface/deleteConnexionByIds.md) &ndash; Deletes the connexion rows identified by the given ids.





Location
=============
Ling\Light_LoginNotifier\Api\Generated\Interfaces\ConnexionApiInterface<br>
See the source code of [Ling\Light_LoginNotifier\Api\Generated\Interfaces\ConnexionApiInterface](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/Api/Generated/Interfaces/ConnexionApiInterface.php)



SeeAlso
==============
Previous class: [LightLoginNotifierBaseApi](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/Classes/LightLoginNotifierBaseApi.md)<br>Next class: [LightLoginNotifierApiFactory](https://github.com/lingtalfi/Light_LoginNotifier/blob/master/doc/api/Ling/Light_LoginNotifier/Api/Generated/LightLoginNotifierApiFactory.md)<br>
