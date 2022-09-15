CREATE DATABASE akademik;

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(25) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `fakultas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `alamat`, `fakultas`) VALUES
(4, '12173773', 'Agus', 'Bandung', 'saintek'),
(5, '121737(3', 'Egi Subastian', 'Subang', 'soshum'),
(6, '12163537', 'Rizki Ramdani', 'Subang', 'soshum'),
(7, '12134597', 'Adnan Maulana', 'Subang', 'saintek');

ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;
