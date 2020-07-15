use Database Essenziele;

INSERT INTO Category (catID, description) VALUES
    (1, "Alles"),
    (2, "Hausmannskost"),
    (3, "Pizza / Pasta"),
    (4, "Burger"),
    (5, "Asiatisch"),
    (6, "Sonnstiges");

INSERT INTO Address (addressID, street_num, plz, ort) VALUES
    (1, "Spitalerstraße 22", 20095, "Hamburg"),
    (2, "Ballindamm 40 EG2", 20095, "Hamburg"),
    (3, "Spadenteich 1", 20099, "Hamburg"),
    (4, "Ditmar-Koel-Straße 21", 20459, "Hamburg"),
    (5, "Brandstwiete 58", 20457, "Hamburg"),
    (6, "Steindamm 53", 20099, "Hamburg"),
    (7, "Depenau 10", 20095, "Hamburg"),
    (8, "Kleine Reichenstraße 18", 20457, "Hamburg"),
    (9, "Rosenstraße Ecke, Gertrudenkirchhof", 20095, "Hamburg"),
    (10, "Kurze Mühren 13", 20095, "Hamburg"),
    (11, "Speersort 1", 20095, "Hamburg"),
    (12, "Rathausmarkt 7", 20095, "Hamburg");


INSERT INTO Restaurant (restID, name, distance, price, Veggie, addressID, catID) VALUES
    (1, "Perle", "*", "*", "***", 1, 1),
    (2, "Europapassage", "*", "**", "***", 2, 1),
    (3, "Max & Consorten", "***", "*", "**", 3, 2),
    (4, "Luigi\s", "***", "**", "***", 4, 3),
    (5, "Bella Italia", "**", "*", "**", 5, 3),
    (6, "Restaurant Kabul", "***", "*", "**", 6, 6),
    (7, "Goot", "**", "***", "*", 7, 2),
    (8, "O-ren Ishii", "**", "***", "***", 8, 5),
    (9, "Better Burger Company", "*", "**", "***", 9, 4),
    (10, "Bucks Burgers", "**", "**", "***", 10, 4),
    (11, "Mr. Cherng", "**", "***", "***", 11, 5),
    (12, "Franco Rathauspassage", "**", "**", "***", 12, 3);

