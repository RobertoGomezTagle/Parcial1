#Modelo de caja
se refieren al modo como se comporta la caja en términos de flujo de página y en relación con otras cajas de la página:
Si una caja se define como un bloque, se comportará de las maneras siguientes:

1.La caja fuerza un salto de línea al llegar al final de la línea.
2.La caja se extenderá en la dirección de la línea para llenar todo el espacio disponible que haya en su contenedor. En la mayoría de los casos, esto significa que la caja será tan ancha como su contenedor, y llenará el 100% del espacio disponible.
3.Se respetan las propiedades width y height.
4.El relleno, el margen y el borde mantienen a los otros elementos alejados de la caja.

A menos que decidamos cambiar el tipo de visualización a en línea, elementos como los encabezados (por ejemplo, <h1>) y todos los elementos <p> usan por defecto block como tipo de visualización externa.

Si una caja tiene una visualización externa de tipo inline, entonces:

1.La caja no fuerza ningún salto de línea al llegar al final de la línea.
2.Las propiedades width y height no se aplican. 
3.Se aplican relleno, margen y bordes verticales, pero no mantienen alejadas otras cajas en línea.
4.Se aplican relleno, margen y bordes horizontales, y mantienen alejadas otras cajas en línea.

El elemento <a>, que se utiliza para los enlaces, y los elementos <span>, <em> y <strong> son ejemplos de elementos que se muestran en línea por defecto.

El tipo de caja que se aplica a un elemento está definido por los valores de propiedad display, como block y inline, y se relaciona con el valor externo (outer) de visualización (display).
