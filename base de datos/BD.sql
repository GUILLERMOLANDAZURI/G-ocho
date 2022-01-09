-- -----------------------------------------------------
-- Table `Usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Usuarios` (
  `Nombre` VARCHAR(45) NOT NULL,
  `Estado` VARCHAR(45) NULL,
  `Contrasena` VARCHAR(45) NULL,
  PRIMARY KEY (`Nombre`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Tareas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Tareas` (
  `idTareas` INT NOT NULL AUTO_INCREMENT,
  `Detalle` TEXT NULL,
  `FechaCreacion` DATE NULL,
  `FechaVencimiento` DATE NULL,
  `Finalizado` CHAR(2) NULL,
  `Nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idTareas`),
  INDEX `fk_Tareas_Usuarios_idx` (`Nombre` ASC) VISIBLE,
  CONSTRAINT `fk_Tareas_Usuarios`
    FOREIGN KEY (`Nombre`)
    REFERENCES `Usuarios` (`Nombre`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;