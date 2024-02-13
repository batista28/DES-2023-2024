-- Inserts para Pais
INSERT INTO Pais (nombre, codigo, descripcion, num_habit, idioma) VALUES
('España', 'ES', 'País en Europa del Sur', 47351500, 'Español'),
('Francia', 'FR', 'País en Europa Occidental', 65273511, 'Francés'),
('Estados Unidos', 'US', 'País en América del Norte', 328200000, 'Inglés'),
('Canadá', 'CA', 'País en América del Norte', 37590000, 'Inglés y Francés'),
('México', 'MX', 'País en América del Norte', 126200000, 'Español');

-- Inserts para Provincia
INSERT INTO Provincia (codProv, nombre, descripcion, comunidad) VALUES
('MAD', 'Madrid', 'Capital de España', 'Comunidad de Madrid'),
('CAT', 'Barcelona', 'Centro cultural y económico', 'Cataluña'),
('AND', 'Sevilla', 'Ciudad histórica y capital de Andalucía', 'Andalucía'),
('VAL', 'Valencia', 'Conocida por las Fallas y la paella', 'Comunidad Valenciana'),
('GAL', 'A Coruña', 'Ciudad portuaria en Galicia', 'Galicia');

-- Inserts para Direccion
INSERT INTO Direccion (Calle, Codigo_postal, Numero, codProv, idPais) VALUES
('Gran Vía', 28013, 10, 'MAD', 1),
('Passeig de Gràcia', 08007, 92, 'CAT', 1),
('Avenida de la Constitución', 41004, 1, 'AND', 1),
('Calle de Colón', 46004, 15, 'VAL', 1),
('Plaza de María Pita', 15001, 1, 'GAL', 1),
('Calle Bailén', 28005, 2, 'MAD', 1),
('Rambla de Catalunya', 08008, 120, 'CAT', 1),
('Calle Sierpes', 41004, 30, 'AND', 1),
('Carrer de Xàtiva', 46002, 24, 'VAL', 1),
('Calle de la Torre', 15002, 28, 'GAL', 1);
-- Asumiendo que los IDs de país siguen el orden de inserción: España = 1, Francia = 2, Estados Unidos = 3, Canadá = 4, México = 5

-- Inserts adicionales para Direccion con diversidad de países
INSERT INTO Direccion (Calle, Codigo_postal, Numero, codProv, idPais) VALUES
('Champs-Élysées', 75008, 50, 'CAT', 2), -- Francia, usando un código de provincia de España por simplicidad
('Fifth Avenue', 10010, 350, 'MAD', 3), -- Estados Unidos
('Rue Sainte-Catherine', 900, 100, 'AND', 4), -- Canadá
('Paseo de la Reforma', 11000, 305, 'VAL', 5), -- México
('Las Ramblas', 8002, 120, 'GAL', 2), -- Francia, simplificación
('Wall Street', 10005, 45, 'MAD', 3), -- Estados Unidos
('Robson Street', 800, 780, 'AND', 4), -- Canadá
('Avenida Juárez', 6600, 90, 'VAL', 5), -- México
('Boulevard Saint-Germain', 75005, 150, 'GAL', 2), -- Francia
('Broadway', 10006, 1, 'MAD', 3), -- Estados Unidos
('Saint Laurent Blvd', 1010, 200, 'AND', 4), -- Canadá
('Calzada del Valle', 66220, 400, 'VAL', 5); -- México
