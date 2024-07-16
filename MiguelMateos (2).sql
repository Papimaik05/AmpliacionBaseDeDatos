--Miguel Mateos
--1Elabora un listado (sin repeticiones) con los apellidos de los clientes de la empresa que hayan hecho algún pedido online (order_mode online) junto con el apellido del empleado que gestiona su cuenta. Muestra en el listado primero el apellido del empleado que gestiono la cuenta y luego el apellido del cliente, y haz que el listado se encuentre ordenado por apellido de empleado primero y luego por apellido del cliente. Usa reuniones para ello.
SELECT DISTINCT EMP.LAST_NAME,CUST.CUST_LAST_NAME
    FROM PR4_CUSTOMERS CUST
        INNER JOIN PR3_EMPLOYEES EMP
            ON CUST.ACCOUNT_MGR_ID=EMP.EMPLOYEE_ID
                INNER JOIN PR4_ORDERS ORD
                    ON CUST.CUSTOMER_ID=ORD.CUSTOMER_ID
    WHERE ORD.ORDER_MODE='online'
    ORDER BY EMP.LAST_NAME;

--2Listado de categorías con más de 2 productos obsoletos (PRODUCT_STATUS obsolete). Lista la categoría y el número de productos obsoletos.
SELECT DISTINCT INF1.CATEGORY_ID,COUNT(*)
    FROM pr4_product_information INF1
    WHERE INF1.PRODUCT_STATUS='obsolete'
    GROUP BY INF1.CATEGORY_ID
    HAVING COUNT(*)>2;

--3 Se quiere generar un “ranking” de los productos más vendidos en el último semestre del año 1990. Para ello nos piden mostrar el nombre de producto y el número de unidades vendidas para cada producto vendido en el último semestre del año 1990 (ordenado por número de unidades vendidas de forma descendente).
Select pI.product_name,SUM(ord.quantity)
From pr4_product_information pI
     Inner Join pr4_order_items ord
       ON pI.product_id=ord.product_id 
          Inner Join pr4_orders o
            ON ord.order_id=o.order_id
Where o.order_date between '01/07/1990' and '31/12/1990'
Group by pI.product_name,pI.product_id
Order by SUM(ord.quantity) DESC;

--4 Muestra los puestos en la empresa que tienen un salario mínimo superior al salario medio de los empleados de la compañía. El listado debe incluir el puesto y su salario mínimo, y estar ordenado ascendentemente por salario mínimo.
Select distinct j.job_title,j.min_salary
 From PR3_JOBS j
  Inner Join PR3_EMPLOYEES emp
    ON j.job_id=emp.job_id
Where j.min_salary >= (
Select AVG(salary) FROM PR3_EMPLOYEES)
Order by j.min_salary;

--5. Mostrar el código, nombre y precio mínimo de productos de la categoría 14 que no aparecen en ningún pedido. Usa para ello una subconsulta no correlacionada.

Select p1.product_id,p1.product_name,p1.min_price 
 From (
Select p1.product_id,p1.product_name,p1.min_price,p1.category_id)
 From PR4_Product_Information p1
  Left outer join Pr4_order_items it
     On p1.product_id=it.product_id
Where it.order_id is Null 
) 
where p1.category_id=14;

--6 Mostrar el código de cliente, nombre y apellidos de aquellos clientes alemanes (NLS_TERRITORY GERMANY) que no han realizado ningún pedido. Usa para ello una consulta correlacionada.
Select c.customer_id,c.cust_first_name,c.cust_last_name
 From pr4_Customers c   left outer JOIN  pr4_Orders p
    On c.customer_id=p.customer_id
Where c.nls_territory='GERMANY'
Order by customer_id;
--7 Mostrar el código de cliente, nombre y apellidos (sin repetición) de aquellos clientes que han realizado al menos un pedido de tipo (order_mode) online y otro direct.
Select distinct customer_id,cust_first_name,cust_last_name
 From pr4_Customers      
Where customer_id IN (
Select customer_id
 From Pr4_orders 
 where order_mode='online')
 And customer_id IN (
 Select customer_id
 From Pr4_orders 
 where order_mode='direct');



 
--8 Mostrar el nombre y apellidos de aquellos clientes que, habiendo realizado algún pedido, nunca han realizado pedidos de tipo direct.
Select distinct c.cust_first_name,c.cust_last_name
  From pr4_Customers c  
   Left outer join pr4_Orders o
     On c.customer_id=o.customer_id
Where o.order_mode !='direct'
Except o.order_id is Null;

--9 Se quiere generar un listado de los productos que generan mayor beneficio. Mostrar el código de producto, su precio mínimo, su precio de venta al público y el porcentaje de incremento de precio. En el listado deben aparecer solo aquellos cuyo precio de venta al público ha superado en un 30 % al precio mínimo.

--10 Mostrar el apellido de los empleados que ganen un 35% más del salario medio de su puesto. El listado debe incluir el salario del empleado y su puesto.