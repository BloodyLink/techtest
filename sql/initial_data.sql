INSERT INTO tipo (nombre) VALUES ("Herramienta");
INSERT INTO tipo (nombre) VALUES ("Mueble");
INSERT INTO tipo (nombre) VALUES ("Ropa de trabajo");

INSERT INTO marca (nombre) VALUES ("Martillazo Ltda.");
INSERT INTO marca (nombre) VALUES ("Escritoriedad");
INSERT INTO marca (nombre) VALUES ("Guantanamo");

INSERT INTO producto (nombre, descripcion, tipo_idtipo, marca_idmarca) VALUES ("Martillo", "Martillo para... martillar", 1, 1);
INSERT INTO producto (nombre, descripcion, tipo_idtipo, marca_idmarca) VALUES ("Escritorio", "Especial para tarros gamerz", 2, 2);
INSERT INTO producto (nombre, descripcion, tipo_idtipo, marca_idmarca) VALUES ("Guantes", "Guantes a prueba de fuego", 3, 3);