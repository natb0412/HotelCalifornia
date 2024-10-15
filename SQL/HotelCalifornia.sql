CREATE DATABASE HotelCalifornia;

Use HotelCalifornia;

-- Brukere tabell
CREATE TABLE Brukere (
    id INT PRIMARY KEY AUTO_INCREMENT,
    brukernavn VARCHAR(255) NOT NULL,
    passord VARCHAR(255) NOT NULL,
    brukertype ENUM('admin', 'gjest') NOT NULL
);

-- Rom_type tabell
CREATE TABLE Rom_type (
    id INT PRIMARY KEY AUTO_INCREMENT,
    navn VARCHAR(255) NOT NULL,
    beskrivelse TEXT,
    maks_voksne INT NOT NULL,
    maks_barn INT NOT NULL
);

-- Rom tabell
CREATE TABLE Rom (
    id INT PRIMARY KEY AUTO_INCREMENT,
    romnummer VARCHAR(255) NOT NULL,
    romtype_id INT NOT NULL,
    tilgjengelighet BOOLEAN DEFAULT TRUE,
    FOREIGN KEY (romtype_id) REFERENCES Rom_type(id)
);

-- Booking tabell
CREATE TABLE Booking (
    id INT PRIMARY KEY AUTO_INCREMENT,
    bruker_id INT NOT NULL,
    rom_id INT NOT NULL,
    innsjekk DATE NOT NULL,
    utsjekk DATE NOT NULL,
    voksne INT NOT NULL,
    barn INT NOT NULL,
    FOREIGN KEY (bruker_id) REFERENCES Brukere(id),
    FOREIGN KEY (rom_id) REFERENCES Rom(id)
);

-- Rom_ikke_tilgengelig tabell
CREATE TABLE Rom_ikke_tilgengelig (
    id INT PRIMARY KEY AUTO_INCREMENT,
    rom_id INT NOT NULL,
    start_dato DATE NOT NULL,
    slutt_dato DATE NOT NULL,
    begrunnelse TEXT,
    FOREIGN KEY (rom_id) REFERENCES Rom(id)
);
