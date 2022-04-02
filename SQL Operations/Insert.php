<!-- SYNTAX -->
INSERT INTO TABLENAME (columnname1, columnname2, columnname3, columnname4, columnname5, columnname6)
VALUES ('Value1', 'Value2', 'Value3', 'Value4', 'Value5', 'Value6');

<!-- EXAMPLE -->
INSERT INTO Persons (PersonID, FirstName, LastName, Address, City)
VALUES (1, 'Tom B. ', 'Erichsen', 'XYZ', 'Rajkot');

<!-- SYNTAX TO INSERT DATA FROM ANOTHER TABLE -->
INSERT INTO TABLENAME (columnname1, columnname2, columnname3)
SELECT TABLE2columnname1, TABLE2columnname2, TABLE2columnname3 FROM TABLENAME2;

<!-- EXAMPLE TO INSERT DATA FROM ANOTHER TABLE -->
INSERT INTO Customers (CustomerName, City, Country)
SELECT SupplierName, City, Country FROM Suppliers;