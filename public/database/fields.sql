INSERT INTO `fields` (`id`, `order`, `name`, `slug`, `form`, `optional`, `field_child_categories`, `created_at`, `updated_at`) VALUES
(1, 1, 'محله', 'mahale', 'SELECT', 0, 1, NULL, NULL),
(2, 2, 'محله خرید', 'mahalekharid', 'MULTISELECT', 0, 1, NULL, NULL),
(3, 3, 'آدرس', 'address', 'TEXT', 1, 0, NULL, NULL),
(4, 4, 'سند', 'sanad', 'SELECT', 0, 0, NULL, NULL),
(5, 5, 'جهت', 'jahat', 'SELECT', 1, 0, NULL, NULL),
(6, 6, 'سن بنا', 'senbana', 'SELECT', 0, 0, NULL, NULL),
(7, 7, 'کل واحد', 'kolvahed', 'SELECT', 1, 0, NULL, NULL),
(8, 8, 'واحد', 'vahet', 'TEXT', 0, 0, NULL, NULL),
(9, 9, 'طبقات', 'tabaghat', 'SELECT', 0, 0, NULL, NULL),
(10, 10, 'طبقه', 'tabaghe', 'SELECT', 0, 0, NULL, NULL),
(11, 11, 'طبقات بین', 'tabaghatbeyn', 'MULTISELECT', 0, 0, NULL, NULL),
(12, 12, 'پارکینگ', 'parking', 'CHECKBOX', 0, 0, NULL, NULL),
(13, 13, 'انباری', 'anbari', 'CHECKBOX', 1, 0, NULL, NULL),
(14, 14, 'آسانسور', 'elvator', 'CHECKBOX', 0, 0, NULL, NULL),
(15, 15, 'متراژ زمین', 'metrajzamin', 'NUMBER', 0, 0, NULL, NULL),
(16, 16, 'متراژ مسکونی', 'metrajmaskoni', 'NUMBER', 0, 0, NULL, NULL),
(17, 17, 'متراژ تجاری', 'metrajtejari', 'NUMBER', 0, 0, NULL, NULL),
(18, 18, 'محوطه', 'metrajmohavate', 'NUMBER', 0, 0, NULL, NULL),
(19, 19, 'محوطه بین', 'metrajmohavatebeyn', 'MULTISELECT', 0, 0, NULL, NULL),
(20, 20, 'حاشیه', 'metrajhashiye', 'NUMBER', 0, 0, NULL, NULL),
(21, 21, 'متراژ', 'metraj', 'NUMBER', 0, 0, NULL, NULL),
(22, 22, 'بنا', 'metrajbana', 'NUMBER', 0, 0, NULL, NULL),
(23, 23, 'بنا بین', 'metrajbanabeyn', 'MULTISELECT', 0, 0, NULL, NULL),
(24, 24, 'متراژ بالکن', 'metrajbalkon', 'NUMBER', 1, 0, NULL, NULL),
(25, 25, 'متراژ حیاط', 'metrajhayat', 'NUMBER', 0, 0, NULL, NULL),
(26, 26, 'متراژ بین', 'metrajbeyn', 'MULTISELECT', 0, 1, NULL, NULL),
(27, 27, 'اتاق', 'otagh', 'SELECT', 0, 0, NULL, NULL),
(28, 28, 'آشپزخانه', 'ashpazkhane', 'CHECKBOX', 0, 0, NULL, NULL),
(29, 29, 'سرویش بهداشتی', 'tovalet', 'SELECT', 0, 0, NULL, NULL),
(30, 30, 'امتیازات', 'emtiazat', 'MULTISELECT', 1, 0, NULL, NULL),
(31, 31, 'امتیازات باغ', 'emtiazatbagh', 'MULTISELECT', 0, 0, NULL, NULL),
(32, 32, 'توضیحات امتیازات', 'abouteemtiazat', 'TEXT', 1, 0, NULL, NULL),
(33, 33, 'نما', 'nama', 'SELECT', 1, 0, NULL, NULL),
(34, 34, 'درب', 'darb', 'SELECT', 0, 0, NULL, NULL),
(35, 35, 'کف', 'kafposh', 'SELECT', 1, 0, NULL, NULL),
(36, 36, 'دیوار', 'divar', 'SELECT', 1, 0, NULL, NULL),
(37, 37, 'دیوار صنعتی', 'divarsanati', 'SELECT', 1, 0, NULL, NULL),
(38, 38, 'سقف', 'saghf', 'SELECT', 0, 0, NULL, NULL),
(39, 39, 'لوستر', 'loster', 'SELECT', 0, 0, NULL, NULL),
(40, 40, 'حمام', 'hammam', 'SELECT', 0, 0, NULL, NULL),
(41, 41, 'دستشور', 'dastshor', 'SELECT', 0, 0, NULL, NULL),
(42, 42, 'تعداد ظرفیت', 'zarfiyattedad', 'SELECT', 0, 0, NULL, NULL),
(43, 43, 'ظرفیت', 'zarfiyat', 'NUMBER', 0, 0, NULL, NULL),
(44, 44, 'مازاد', 'zarfiyatmazad', 'SELECT', 0, 0, NULL, NULL),
(45, 45, 'تامین آبگرم', 'abgarm', 'SELECT', 0, 0, NULL, NULL),
(46, 46, 'گرمایش', 'garmayesh', 'SELECT', 1, 0, NULL, NULL),
(47, 47, 'سرمایش', 'sarmayesh', 'MULTISELECT', 1, 0, NULL, NULL),
(48, 48, 'استخر', 'estakhr', 'SELECT', 0, 0, NULL, NULL),
(49, 49, 'سونا و جکوزی', 'sonajacozi', 'CHECKBOX', 0, 0, NULL, NULL),
(50, 50, 'وان', 'van', 'SELECT', 0, 0, NULL, NULL),
(51, 51, 'آلاچیق', 'alachigh', 'CHECKBOX', 0, 0, NULL, NULL),
(52, 52, 'کمد دیواری', 'komoddivari', 'SELECT', 0, 0, NULL, NULL),
(53, 53, 'کابینت', 'kabinet', 'SELECT', 0, 0, NULL, NULL),
(54, 54, 'گاز زومیزی', 'gasromizi', 'CHECKBOX', 0, 0, NULL, NULL),
(55, 55, 'تخت', 'takht', 'CHECKBOX', 0, 0, NULL, NULL),
(56, 56, 'مبل', 'moble', 'CHECKBOX', 0, 0, NULL, NULL),
(57, 57, 'تلوزیون', 'tv', 'CHECKBOX', 0, 0, NULL, NULL),
(58, 58, 'یخچال', 'yakhchal', 'CHECKBOX', 0, 0, NULL, NULL),
(59, 59, 'وسایل پخت و پز', 'pokhtopaz', 'CHECKBOX', 0, 0, NULL, NULL),
(60, 60, 'اجاره عادی', 'priceadi', 'NUMBER', 0, 0, NULL, NULL),
(61, 61, 'اجاره آخرهفته', 'priceendhafte', 'NUMBER', 0, 0, NULL, NULL),
(62, 62, 'اجاره تعطیلات', 'pricetatilat', 'NUMBER', 0, 0, NULL, NULL),
(63, 63, 'هر نفر اضافه', 'pricenafar', 'NUMBER', 0, 0, NULL, NULL),
(64, 64, 'قیمت', 'price', 'NUMBER', 0, 0, NULL, NULL),
(65, 65, 'رهن از', 'pricerahnaz', 'NUMBER', 0, 0, NULL, NULL),
(66, 66, 'اجاره از', 'priceejareaz', 'NUMBER', 0, 0, NULL, NULL),
(67, 67, 'رهن تا', 'pricerahnta', 'NUMBER', 0, 0, NULL, NULL),
(68, 68, 'اجاره تا', 'priceejareta', 'NUMBER', 0, 0, NULL, NULL),
(69, 69, 'اجاره بین', 'priceejarebeyn', 'MULTISELECT', 0, 0, NULL, NULL),
(70, 70, 'اصل مبلغ', 'priceasl', 'NUMBER', 0, 0, NULL, NULL),
(71, 71, 'با رهن', 'pricebarahn', 'NUMBER', 0, 0, NULL, NULL),
(72, 72, 'تخلیه', 'takhleye', 'DATE', 1, 0, NULL, NULL),
(73, 73, 'شغل', 'shoghl', 'TEXT', 0, 0, NULL, NULL),
(74, 74, 'سابقه', 'sabeghe', 'SELECT', 0, 0, NULL, NULL),
(75, 75, 'سابقه از', 'sabegheaz', 'MULTISELECT', 0, 0, NULL, NULL),
(76, 76, 'مجوز', 'mojavez', 'CHECKBOX', 0, 0, NULL, NULL),
(77, 77, 'اموال', 'amval', 'NUMBER', 0, 0, NULL, NULL),
(78, 78, 'اجناس', 'ajnas', 'NUMBER', 0, 0, NULL, NULL),
(79, 79, 'معاوضه با', 'moavezeba', 'SELECT', 1, 0, NULL, NULL),
(80, 80, 'معاوضه محل', 'mahalemoaveze', 'MULTISELECT', 1, 1, NULL, NULL),
(81, 81, 'معاوضه مبلغ', 'pricemoaveze', 'NUMBER', 1, 0, NULL, NULL),
(82, 82, 'توضیحات', 'aboute', 'TEXTAREA', 1, 0, NULL, NULL),
(83, 83, 'عکس', 'image', 'IMAGE', 0, 0, NULL, NULL),
(84, 84, 'ویدیو', 'video', 'VIDEO', 1, 0, NULL, NULL);