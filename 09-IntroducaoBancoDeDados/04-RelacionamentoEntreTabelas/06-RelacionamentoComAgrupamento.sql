SELECT nomecategoriaID, COUNT(produtoID) AS total
FROM    produtos AS p
INNER JOIN categorias AS c ON p.categoriaID = c.categoriaID
GROUP BY categoriaID