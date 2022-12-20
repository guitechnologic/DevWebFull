
SELECT nomeproduto, nomecategoria
FROM
    produto as p
    INNER JOIN categorias as c
    ON p.categoriaID = c.categoriaID