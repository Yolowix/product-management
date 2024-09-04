<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20240903162122 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'add value on product';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("INSERT INTO product (id, code, name, description, image, price, category, created_at, updated_at, shell_id, internal_reference, inventory_status, rating, quantity) VALUES
            (1000, 'f230fh0g3', 'Bamboo Watch', 'Product Description', 'bamboo-watch.jpg', 65, 'Accessories', FROM_UNIXTIME(1718114215761 / 1000), FROM_UNIXTIME(1718114215761 / 1000), 15, 'REF-123-456', 'INSTOCK', 5, 10),
            (1001, 'nvklal433', 'Black Watch', 'Product Description', 'black-watch.jpg', 72, 'Accessories', FROM_UNIXTIME(1718114215761 / 1000), FROM_UNIXTIME(1718114215761 / 1000), 15, 'REF-123-456', 'INSTOCK', 4, 10),
            (1002, 'zz21cz3c1', 'Blue Band', 'Product Description', 'blue-band.jpg', 79, 'Fitness', FROM_UNIXTIME(1718114215761 / 1000), FROM_UNIXTIME(1718114215761 / 1000), 15, 'REF-123-456', 'LOWSTOCK', 3, 10),
            (1003, '244wgerg2', 'Blue T-Shirt', 'Product Description', 'blue-t-shirt.jpg', 29, 'Clothing', FROM_UNIXTIME(1718114215761 / 1000), FROM_UNIXTIME(1718114215761 / 1000), 15, 'REF-123-456', 'INSTOCK', 5, 10),
            (1004, 'h456wer53', 'Bracelet', 'Product Description', 'bracelet.jpg', 15, 'Accessories', FROM_UNIXTIME(1718114215761 / 1000), FROM_UNIXTIME(1718114215761 / 1000), 15, 'REF-123-456', 'INSTOCK', 4, 10),
            (1005, 'av2231fwg', 'Brown Purse', 'Product Description', 'brown-purse.jpg', 120, 'Accessories', FROM_UNIXTIME(1718114215761 / 1000), FROM_UNIXTIME(1718114215761 / 1000), 15, 'REF-123-456', 'OUTOFSTOCK', 4, 10),
            (1006, 'bib36pfvm', 'Chakra Bracelet', 'Product Description', 'chakra-bracelet.jpg', 32, 'Accessories', FROM_UNIXTIME(1718114215761 / 1000), FROM_UNIXTIME(1718114215761 / 1000), 15, 'REF-123-456', 'LOWSTOCK', 3, 10),
            (1007, 'mbvjkgip5', 'Galaxy Earrings', 'Product Description', 'galaxy-earrings.jpg', 34, 'Accessories', FROM_UNIXTIME(1718114215761 / 1000), FROM_UNIXTIME(1718114215761 / 1000), 15, 'REF-123-456', 'INSTOCK', 5, 10),
            (1008, 'vbb124btr', 'Game Controller', 'Product Description', 'game-controller.jpg', 99, 'Electronics', FROM_UNIXTIME(1718114215761 / 1000), FROM_UNIXTIME(1718114215761 / 1000), 15, 'REF-123-456', 'LOWSTOCK', 4, 10),
            (1009, 'cm230f032', 'Gaming Set', 'Product Description', 'gaming-set.jpg', 299, 'Electronics', FROM_UNIXTIME(1718114215761 / 1000), FROM_UNIXTIME(1718114215761 / 1000), 15, 'REF-123-456', 'INSTOCK', 3, 10),
            (1010, 'plb34234v', 'Gold Phone Case', 'Product Description', 'gold-phone-case.jpg', 24, 'Accessories', FROM_UNIXTIME(1718114215761 / 1000), FROM_UNIXTIME(1718114215761 / 1000), 15, 'REF-123-456', 'OUTOFSTOCK', 4, 10),
            (1011, '4920nnc2d', 'Green Earbuds', 'Product Description', 'green-earbuds.jpg', 89, 'Electronics', FROM_UNIXTIME(1718114215761 / 1000), FROM_UNIXTIME(1718114215761 / 1000), 15, 'REF-123-456', 'INSTOCK', 4, 10),
            (1012, '250vm23cc', 'Green T-Shirt', 'Product Description', 'green-t-shirt.jpg', 49, 'Clothing', FROM_UNIXTIME(1718114215761 / 1000), FROM_UNIXTIME(1718114215761 / 1000), 15, 'REF-123-456', 'INSTOCK', 5, 10),
            (1013, 'fldsmn31b', 'Grey T-Shirt', 'Product Description', 'grey-t-shirt.jpg', 48, 'Clothing', FROM_UNIXTIME(1718114215761 / 1000), FROM_UNIXTIME(1718114215761 / 1000), 15, 'REF-123-456', 'OUTOFSTOCK', 3, 10),
            (1014, 'waas1x2as', 'Headphones', 'Product Description', 'headphones.jpg', 175, 'Electronics', FROM_UNIXTIME(1718114215761 / 1000), FROM_UNIXTIME(1718114215761 / 1000), 15, 'REF-123-456', 'LOWSTOCK', 5, 10),
            (1015, 'vb34btbg5', 'Light Green T-Shirt', 'Product Description', 'light-green-t-shirt.jpg', 49, 'Clothing', FROM_UNIXTIME(1718114215761 / 1000), FROM_UNIXTIME(1718114215761 / 1000), 15, 'REF-123-456', 'INSTOCK', 4, 10),
            (1016, 'k8l6j58jl', 'Lime Band', 'Product Description', 'lime-band.jpg', 79, 'Fitness', FROM_UNIXTIME(1718114215761 / 1000), FROM_UNIXTIME(1718114215761 / 1000), 15, 'REF-123-456', 'INSTOCK', 3, 10),
            (1017, 'v435nn85n', 'Mini Speakers', 'Product Description', 'mini-speakers.jpg', 85, 'Clothing', FROM_UNIXTIME(1718114215761 / 1000), FROM_UNIXTIME(1718114215761 / 1000), 15, 'REF-123-456', 'INSTOCK', 4, 10),
            (1018, '09zx9c0zc', 'Painted Phone Case', 'Product Description', 'painted-phone-case.jpg', 56, 'Accessories', FROM_UNIXTIME(1718114215761 / 1000), FROM_UNIXTIME(1718114215761 / 1000), 15, 'REF-123-456', 'INSTOCK', 5, 10),
            (1019, 'mnb5mb2m5', 'Pink Band', 'Product Description', 'pink-band.jpg', 79, 'Fitness', FROM_UNIXTIME(1718114215761 / 1000), FROM_UNIXTIME(1718114215761 / 1000), 15, 'REF-123-456', 'OUTOFSTOCK', 4, 10),
            (1020, 'zxc87cn8m', 'Purple T-Shirt', 'Product Description', 'purple-t-shirt.jpg', 35, 'Clothing', FROM_UNIXTIME(1718114215761 / 1000), FROM_UNIXTIME(1718114215761 / 1000), 15, 'REF-123-456', 'INSTOCK', 4, 10),
            (1021, 'o1n2x2q1m', 'Red Band', 'Product Description', 'red-band.jpg', 89, 'Fitness', FROM_UNIXTIME(1718114215761 / 1000), FROM_UNIXTIME(1718114215761 / 1000), 15, 'REF-123-456', 'INSTOCK', 3, 10),
            (1022, 'k0j8c1pqz', 'Smart Band', 'Product Description', 'smart-band.jpg', 99, 'Fitness', FROM_UNIXTIME(1718114215761 / 1000), FROM_UNIXTIME(1718114215761 / 1000), 15, 'REF-123-456', 'INSTOCK', 4, 10),
            (1023, 'q12op3v9b', 'Smartwatch', 'Product Description', 'smartwatch.jpg', 199, 'Electronics', FROM_UNIXTIME(1718114215761 / 1000), FROM_UNIXTIME(1718114215761 / 1000), 15, 'REF-123-456', 'INSTOCK', 4, 10),
            (1024, 'smk3kofqw', 'Steel Band', 'Product Description', 'steel-band.jpg', 89, 'Fitness', FROM_UNIXTIME(1718114215761 / 1000), FROM_UNIXTIME(1718114215761 / 1000), 15, 'REF-123-456', 'INSTOCK', 4, 10),
            (1025, 'sdj44fqw4', 'Steel Watch', 'Product Description', 'steel-watch.jpg', 89, 'Accessories', FROM_UNIXTIME(1718114215761 / 1000), FROM_UNIXTIME(1718114215761 / 1000), 15, 'REF-123-456', 'INSTOCK', 4, 10),
            (1026, 'r15e9v9c0', 'White T-Shirt', 'Product Description', 'white-t-shirt.jpg', 30, 'Clothing', FROM_UNIXTIME(1718114215761 / 1000), FROM_UNIXTIME(1718114215761 / 1000), 15, 'REF-123-456', 'INSTOCK', 5, 10),
            (1027, 'qpoa3e5rt', 'Yellow Band', 'Product Description', 'yellow-band.jpg', 79, 'Fitness', FROM_UNIXTIME(1718114215761 / 1000), FROM_UNIXTIME(1718114215761 / 1000), 15, 'REF-123-456', 'INSTOCK', 4, 10),
            (1028, 'a3g1z5k4r', 'Orange Watch', 'Product Description', 'orange-watch.jpg', 85, 'Accessories', FROM_UNIXTIME(1718114215761 / 1000), FROM_UNIXTIME(1718114215761 / 1000), 15, 'REF-123-456', 'INSTOCK', 5, 10),
            (1029, 'b7k8s2m3n', 'Teal Phone Case', 'Product Description', 'teal-phone-case.jpg', 30, 'Accessories', FROM_UNIXTIME(1718114215761 / 1000), FROM_UNIXTIME(1718114215761 / 1000), 15, 'REF-123-456', 'INSTOCK', 4, 10);
        ");
    }

    public function down(Schema $schema): void
    {
        $this->addSql("DELETE FROM product WHERE id BETWEEN 1000 AND 1029");
    }
}
