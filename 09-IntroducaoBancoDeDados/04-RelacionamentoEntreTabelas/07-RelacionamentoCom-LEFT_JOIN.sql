SELECT nomecompleto, count(pedidoID) AS total
from clientes c
INNER JOIN pedidos p ON c.clienteID = p.clienteID
GROUP BY c.clienteID
