-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 11, 2018 at 05:17 PM
-- Server version: 10.2.12-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id6906789_bookcasedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'badmin', 'badmin');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `genre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `summary` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL DEFAULT 200,
  `image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `author`, `genre`, `summary`, `price`, `image`, `Type`) VALUES
(1, 'The Fountainhead', 'Ayn Rand', 'Fiction', 'In early 1922, Howard Roark is expelled from the architecture department of the Stanton Institute of Technology because he will not adhere to the school\'s preference for historical convention in building design. Roark goes to New York City and gets a job with Henry Cameron. Cameron was once a renowned architect, but now gets few commissions. In the meantime, Roark\'s popular, but vacuous, school roommate Peter Keating (whom Roark sometimes helped with projects) graduates with high honors. He too moves to New York, where he has been offered a position with the prestigious architecture firm, Francon & Heyer. Keating ingratiates himself with senior partner Guy Francon and works to remove rivals within his firm. Eventually, he is made a partner. Meanwhile, Roark and Cameron create inspired work, but struggle financially.', 300, 'book1.jpg', 3),
(2, 'The Great Gatsby', 'F. Scott Fitzgerald', 'Fiction', 'Set in the Jazz Age, The Great Gatsby tells the story of the mysterious millionaire Jay Gatsby, his decadent parties, and his love for the alluring Daisy Buchanan. Dismissed as “no more than a glorified anecdote, and not too probable at that” (The Chicago Tribune), The Great Gatsby is now considered a contender for “the Great American Novel.” Fitzgerald wanted to title the novel “Trimalchio in West Egg,” but both his wife and his editor preferred “The Great Gatsby.” Fitzgerald gave in, though he still thought that “the title is only fair, rather bad than good.”', 525, 'book2.jpg', 3),
(3, '1984', 'George Orwell', 'Fiction', 'The Fountainhead is a 1943 novel by Russian-American author.The most famous dystopian novel of all time, 1984 is the story of Winston Smith as he struggles to survive in the sinister world of Big Brother. This novel has so defined the twentieth century that many terms from it—Big Brother, doublethink, thought police—have seeped into popular culture. When it was first published in 1949, the novelist V. S. Pritchett commented: “I do not think I have ever read a novel more frightening and depressing; and yet, such are the originality, the suspense, the speed of writing and withering indignation that it is impossible to put the book down.”Ayn Rand, her first major literary success. The novel\'s protagonist, Howard Roark, is an individualistic young architect who designs modernist buildings and refuses to compromise with an architectural establishment unwilling.', 495, 'book3.jpg', 3),
(4, 'Ulysses', 'James Joyce', 'Fiction', 'Written as an homage to Homer’s epic poem The Odyssey, Ulysses follows its hero, Leopold Bloom, through the streets of Dublin. Overflowing with puns, references to classical literature, and stream-of-consciousness writing, this is a complex, multilayered novel about one day in the life of an ordinary man. Initially banned in the United States but overturned by a legal challenge by Random House’s Bennett Cerf, Ulysses was called “a memorable catastrophe” (Virginia Woolf), “a book to which we are all indebted” (T. S. Eliot), and “the most faithful X-ray ever taken of the ordinary human consciousness” (Edmund Wilson). Joyce himself said, “There is not one single serious line in [Ulysses].', 500, 'book4.jpg', 0),
(5, 'Digital Fortress', 'Dan Brown', 'Sci-Fi', 'When the National Security Agency’s invincible code-breaking machine encounters a mysterious code it cannot break, the agency calls its head cryptographer, Susan Fletcher, a brilliant, beautiful mathematician. What she uncovers sends shock waves through the corridors of power. The NSA is being held hostage…not by guns or bombs but by a code so complex that if released would cripple U.S. intelligence.\r\n\r\nCaught in an accelerating tempest of secrecy and lies, Fletcher battles to save the agency she believes in. Betrayed on all sides, she finds herself fighting not only for her country but for her life. It is a battle for survival―a crucial bid to destroy a creation of inconceivable genius that threatens to obliterate the balance of world power…for all time.', 250, 'book5.jpg', 0),
(6, 'Harry Potter and The Half Blood Prince', 'J.K. Rowling ', 'Fantasy', 'As Death Eaters wreak havoc in both Muggle and Wizard worlds, Hogwarts is no longer a safe haven for students. Though Harry suspects there are new dangers lurking within the castle walls, Dumbledore is more intent than ever on preparing the young wizard for the final battle with Voldemort. Meanwhile, teenage hormones run rampant through Hogwarts, presenting a different sort of danger. Love may be in the air, but tragedy looms, and Hogwarts may never be the same again.', 375, '1.jpg', 0),
(7, 'The Fault In our Stars ', 'John Green', 'Young Adult ', 'The Fault In Our Stars is a fabulous book about a young teenage girl who has been diagnosed with lung cancer and attends a cancer support group.\r\n\r\nHazel is 16 and is reluctant to go to the support group, but she soon realises that it was a good idea. Hazel meets a young boy named Augustus Waters. He is charming and witty. Augustus has had osteosarcoma, a rare form of bone cancer, but has recently had the all clear.\r\n\r\nHazel and Augustus embark on a roller coaster ride of emotions, including love, sadness and romance, while searching for the author of their favourite book. They travel to Amsterdam in search of Peter Van Houten the author of An Imperial Affliction. While on their trip Augustus breaks some heartbreaking news to Hazel and both of their worlds fall apart around them.', 400, 'tfios.jpg', 1),
(8, 'The Kite Runner', 'Khaled Hosseini ', 'Fiction', 'In the 70\'s in Afghanistan, the Pushtun boy Amir and the Hazara boy Hassan, who is his loyal friend and son of their Hazara servant Ali, are raised together in Amir\'s father house.In return, Amir feels a great respect for his father\'s best friend Rahim Khan, who supports his intention to become a writer. After Amir winning a competition of kiting, Hassan runs to bring a kite to Amir, but he is beaten and raped by the brutal Assef in an empty street to protect Amir\'s kite; the coward Amir witness the assault but does not help the loyal Hassam.In 1988, they have a simple life in Fremont, California, when Amir graduates in a public college for the pride and joy of Baba. Later Amir meets his countrywoman Soraya and they get married. In 2000, after the death of Baba, Amir is a famous novelist and receives a phone call from the terminal Rahim Khan, who discloses secrets about his family, forcing Amir to return to Peshawar, in Pakistan, in a journey of redemption.', 300, 'tkr.jpg', 2),
(9, 'Looking For Alaska', 'John Green', 'Young Adult ', 'Before. Miles “Pudge” Halter is done with his safe life at home. His whole life has been one big non-event, and his obsession with famous last words has only made him crave “the Great Perhaps” even more (Francois Rabelais, poet). He heads off to the sometimes crazy and anything-but-boring world of Culver Creek Boarding School, and his life becomes the opposite of safe. Because down the hall is Alaska Young. The gorgeous, clever, funny, sexy, self-destructive, screwed up, and utterly fascinating Alaska Young. She is an event unto herself. She pulls Pudge into her world, launches him into the Great Perhaps, and steals his heart. Then. . . . \r\nAfter. Nothing is ever the same.', 450, '99561.jpg', 1),
(10, 'Carve The Mark ', 'Veronica Roth', 'Young Adult ', 'Cyra is the sister of the brutal tyrant who rules the Shotet people. Cyra’s currentgift gives her pain and power—something her brother exploits, using her to torture his enemies. But Cyra is much more than just a blade in her brother’s hand: she is resilient, quick on her feet, and smarter than he knows.\r\n\r\nAkos is the son of a farmer and an oracle from the frozen nation-planet of Thuvhe. Protected by his unusual currentgift, Akos is generous in spirit, and his loyalty to his family is limitless. Once Akos and his brother are captured by enemy Shotet soldiers, Akos is desperate to get his brother out alive—no matter what the cost.\r\n\r\nThen Akos is thrust into Cyra\'s world, and the enmity between their countries and families seems insurmountable. Will they help each other to survive, or will they destroy one another?\r\n\r\nCarve the Mark is Veronica Roth\'s stunning portrayal of the power of friendship—and love—in a galaxy filled with unexpected gifts.', 450, 'mark.jpg', 0),
(11, 'The Hunger Games', 'Suzanne Collins', 'Young Adult ', 'The nation of Panem, formed from a post-apocalyptic North America, is a country that consists of a wealthy Capitol region surrounded by 12 poorer districts. Early in its history, a rebellion led by a 13th district against the Capitol resulted in its destruction and the creation of an annual televised event known as the Hunger Games. In punishment, and as a reminder of the power and grace of the Capitol, each district must yield one boy and one girl between the ages of 12 and 18 through a lottery system to participate in the games. The \'tributes\' are chosen during the annual Reaping and are forced to fight to the death, leaving only one survivor to claim victory.\r\n\r\nWhen 16-year-old Katniss\'s young sister, Prim, is selected as District 12\'s female representative, Katniss volunteers to take her place. She and her male counterpart Peeta, are pitted against bigger, stronger representatives, some of whom have trained for this their whole lives. , she sees it as a death sentence. ', 450, 'hunger', 0),
(12, 'Eleanor & Park', ' Rainbow Rowell', 'Young Adult ', 'Eleanor... Red hair, wrong clothes. Standing behind him until he turns his head. Lying beside him until he wakes up. Making everyone else seem drabber and flatter and never good enough...Eleanor.\r\n\r\nPark... He knows she\'ll love a song before he plays it for her. He laughs at her jokes before she ever gets to the punch line. There\'s a place on his chest, just below his throat, that makes her want to keep promises...Park.\r\n\r\nSet over the course of one school year, this is the story of two star-crossed sixteen-year-olds—smart enough to know that first love almost never lasts, but brave and desperate enough to try.', 400, 'park.jpg', 0),
(13, 'Simon vs. the Homo Sapiens Agenda', ' Becky Albertalli', 'Young Adult ', 'Sixteen-year-old and not-so-openly gay Simon Spier prefers to save his drama for the school musical. But when an email falls into the wrong hands, his secret is at risk of being thrust into the spotlight. Now Simon is actually being blackmailed: if he doesn’t play wingman for class clown Martin, his sexual identity will become everyone’s business. Worse, the privacy of Blue, the pen name of the boy he’s been emailing, will be compromised.\r\n\r\nWith some messy dynamics emerging in his once tight-knit group of friends, and his email correspondence with Blue growing more flirtatious every day, Simon’s junior year has suddenly gotten all kinds of complicated. Now, change-averse Simon has to find a way to step out of his comfort zone before he’s pushed out—without alienating his friends, compromising himself, or fumbling a shot at happiness with the most confusing, adorable guy he’s never met. ', 600, 'simon.jpg', 1),
(14, 'Thirteen Reasons Why', 'Jay Asher', 'Young Adult ', 'Clay Jensen returns home from school to find a strange package with his name on it lying on his porch. Inside he discovers several cassette tapes recorded by Hannah Baker–his classmate and crush–who committed suicide two weeks earlier. Hannah’s voice tells him that there are thirteen reasons why she decided to end her life. Clay is one of them. If he listens, he’ll find out why. \r\n\r\nClay spends the night crisscrossing his town with Hannah as his guide. He becomes a firsthand witness to Hannah’s pain, and as he follows Hannah’s recorded words throughout his town, what he discovers changes his life forever.', 600, '13.jpg', 3),
(15, 'Miss Peregrine\'s Home for Peculiar Children', ' Ransom Riggs', 'Young Adult ', 'A mysterious island. An abandoned orphanage. A strange collection of very curious photographs. It all waits to be discovered in Miss Peregrine\'s Home for Peculiar Children, an unforgettable novel that mixes fiction and photography in a thrilling reading experience. As our story opens, a horrific family tragedy sets sixteen-year-old Jacob journeying to a remote island off the coast of Wales, where he discovers the crumbling ruins of Miss Peregrine\'s Home for Peculiar Children. As Jacob explores its abandoned bedrooms and hallways, it becomes clear that the children were more than just peculiar. They may have been dangerous. They may have been quarantined on a deserted island for good reason. And somehow-impossible though it seems-they may still be alive.', 300, 'miss.jpg', 0),
(16, 'The Perks Of Being A Wallflower', 'Stephen Chbosky', 'Young Adult', 'The critically acclaimed debut novel from Stephen Chbosky, Perks follows observant “wallflower” Charlie as he charts a course through the strange world between adolescence and adulthood. First dates, family drama, and new friends. Sex, drugs, and The Rocky Horror Picture Show. Devastating loss, young love, and life on the fringes. Caught between trying to live his life and trying to run from it, Charlie must learn to navigate those wild and poignant roller-coaster days known as growing up.\r\n', 280, 'perks.jpg', 3),
(17, 'The Fellowship of the Ring', 'J.R.R. Tolkien', 'Fantasy', 'One Ring to rule them all, One Ring to find them, One Ring to bring them all and in the darkeness bind them\r\n\r\nIn ancient times the Rings of Power were crafted by the Elven-smiths, and Sauron, The Dark Lord, forged the One Ring, filling it with his own power so that he could rule all others. But the One Ring was taken from him, and though he sought it throughout Middle-earth, it remained lost to him. After many ages it fell into the hands of Bilbo Baggins, as told in The Hobbit.\r\n\r\nIn a sleepy village in the Shire, young Frodo Baggins finds himself faced with an immense task, as his elderly cousin Bilbo entrusts the Ring to his care. Frodo must leave his home and make a perilous journey across Middle-earth to the Cracks of Doom, there to destroy the Ring and foil the Dark Lord in his evil purpose.', 300, 'ring.jpg', 0),
(18, 'The Wise Man\'s Fear', 'Patrick Rothfuss', 'Fantasy', 'My name is Kvothe.\r\nI have stolen princesses back from sleeping barrow kings. I burned down the town of Trebon. I have spent the night with Felurian and left with both my sanity and my life. So begins the tale of a hero told from his own point of view — a story unequaled in fantasy literature. Now in The Wise Man\'s Fear, an escalating rivalry with a powerful member of the nobility forces Kvothe to leave the University and seek his fortune abroad. Adrift, penniless, and alone, he travels to Vintas, where he quickly becomes entangled in the politics of courtly society. While attempting to curry favor with a powerful noble, Kvothe uncovers an assassination attempt, comes into conflict with a rival arcanist, and leads a group of mercenaries into the wild, in an attempt to solve the mystery of who (or what) is waylaying travelers on the King\'s Road.', 400, 'fear.jpg', 2),
(19, 'The Gunslinger', 'Stephen King ', 'Fantasy', 'Beginning with a short story appearing in The Magazine of Fantasy and Science Fiction in 1978, the publication of Stephen King\'s epic work of fantasy -- what he considers to be a single long novel and his magnum opus -- has spanned a quarter of a century.\r\n\r\nSet in a world of extraordinary circumstances, filled with stunning visual imagery and unforgettable characters, The Dark Tower series is King\'s most visionary feat of storytelling, a magical mix of science fiction, fantasy, and horror that may well be his crowning achievement.', 305, 'gun.jpg', 0),
(20, 'The Kiss Quotient', 'Helen Hoang', 'Romance', 'A heartwarming and refreshing debut novel that proves one thing: there\'s not enough data in the world to predict what will make your heart tick.Stella Lane thinks math is the only thing that unites the universe. She comes up with algorithms to predict customer purchases--a job that has given her more money than she knows what to do with, and way less experience in the dating department than the average thirty-year-old.Before long, Stella not only learns to appreciate his kisses, but to crave all the other things he\'s making her feel.', 400, 'kiss.jpg', 0),
(21, 'To All the Boys I\'ve Loved Before', 'Jenny Han', 'Romance', 'To All the Boys I’ve Loved Before is the story of Lara Jean, who has never openly admitted her crushes, but instead wrote each boy a letter about how she felt, sealed it, and hid it in a box under her bed. But one day Lara Jean discovers that somehow her secret box of letters has been mailed, causing all her crushes from her past to confront her about the letters: her first kiss, the boy from summer camp, even her sister\'s ex-boyfriend, Josh. As she learns to deal with her past loves face to face, Lara Jean discovers that something good may come out of these letters after all.', 700, 'boys.jpg', 1),
(22, 'Jane Eyre', 'Charlotte Brontë', 'Romance', 'Orphaned as a child, Jane has felt an outcast her whole young life. Her courage is tested once again when she arrives at Thornfield Hall, where she has been hired by the brooding, proud Edward Rochester to care for his ward Adèle. Jane finds herself drawn to his troubled yet kind spirit. She falls in love. Hard.But there is a terrifying secret inside the gloomy, forbidding Thornfield Hall. Is Rochester hiding from Jane? Will Jane be left heartbroken and exiled once again?', 100, 'jane.jpg', 0),
(23, 'Outlander', 'Diana Gabaldon', 'Romance', 'The year is 1945. Claire Randall, a former combat nurse, is just back from the war and reunited with her husband on a second honeymoon when she walks through a standing stone in one of the ancient circles that dot the British Isles. Suddenly she is a Sassenach—an “outlander”—in a Scotland torn by war.Hurled back in time by forces she cannot understand, Claire is catapulted into the intrigues of lairds and spies that may threaten her life, and shatter her heart. For here James Fraser, a gallant young Scots warrior, shows her a love so absolute that Claire becomes a woman torn between fidelity and desire—and between two vastly different men in two irreconcilable lives.', 300, 'outlander.jpg', 0),
(24, 'Love Story', 'Erich Segal', 'Romance', 'Oliver Barrett IV, a wealthy jock from a stuffy WASP family on his way to a Harvard degree and a career in law . . . Jenny Cavilleri, a sharp-tongued, working-class beauty studying music at Radcliffe.Opposites in nearly every way, Oliver and Jenny are kindred spirits from vastly different worlds. Falling deeply and powerfully, their attraction to one another defies everything they have ever believed—as they share a passion far greater than anything they dreamed possible and explore the wonder of a love that must end too soon.', 400, 'love.jpg', 0),
(25, 'Cross Breed', 'Lora Leigh', 'Romance', 'The Breeds are humans altered before conception with the DNA of the predators of Earth. But although they all carry the genetic material of beasts within them, Cassandra Sinclair stands apart. A unique mix of wolf, coyote and human, she is revered by many—but preyed upon by others. She is fiercely protected by her community…but no one manages to stop her when she slips away one day to offer her body in exchange for her sister’s safety.The man she succumbs to surprises her by unleashing her inner animal in ways she never dreamed possible—and provokes her deep, furious rage.', 330, 'cross.jpg', 2),
(26, 'Alaskan Holiday', 'Debbie Macomber', 'Romance', 'Debbie Macomber brings us to the Alaskan wilderness for a magical Christmas tale about finding love where it\'s least expected.\r\nBefore beginning her dream job as sous chef in one of Seattle\'s hottest new restaurants, Josie Avery takes a summer position cooking at a lakeside lodge in the remote Alaskan town of Ponder. Josie falls for the rustic charms of the local community--including Jack Corcoran, the crotchety keeper of Ponder\'s famed sourdough starter, and, in particular, the quiet and intense Palmer Saxon, a famed master swordsmith.\r\n', 400, 'alaskaa.jpg', 0),
(27, 'Every Breath', 'Nicholas Sparks', 'Romance', 'Hope Anderson is at a crossroads. At thirty-six, she\'s been dating her boyfriend, an orthopedic surgeon, for six years. With no wedding plans in sight, and her father recently diagnosed with ALS, she decides to use a week at her family\'s cottage in Sunset Beach, North Carolina, to ready the house for sale and mull over some difficult decisions about her future.Tru Walls has never visited North Carolina but is summoned to Sunset Beach by a letter from a man claiming to be his father.', 400, 'breath.jpg', 2),
(28, 'The Notebook', 'Nicholas Sparks', 'Romance', 'In 1940s South Carolina, mill worker Noah Calhoun (Ryan Gosling) and rich girl Allie (Rachel McAdams) are desperately in love. But her parents don\'t approve. When Noah goes off to serve in World War II, it seems to mark the end of their love affair. In the interim, Allie becomes involved with another man (James Marsden). But when Noah returns to their small town years later, on the cusp of Allie\'s marriage, it soon becomes clear that their romance is anything but over.', 375, 'notebook.jpg', 0),
(29, 'Wuthering Heights', 'Emily Brontë', 'Romance', 'Many people, generally those who have never read the book, consider Wuthering Heights to be a straightforward, if intense, love story — Romeo and Juliet on the Yorkshire Moors. But this is a mistake. Really the story is one of revenge. It follows the life of Heathcliff, a mysterious gypsy-like person, from childhood (about seven years old) to his death in his late thirties. Heathcliff rises in his adopted family and then is reduced to the status of a servant, running away when the young woman he loves decides to marry another. He returns later, rich and educated, and sets about gaining his revenge on the two families that he believed ruined his life.', 100, 'height.jpg', 0),
(30, 'The 7 Habits of Highly Effective People', 'Stephen R. Covey', 'Business ', 'When Stephen Covey first released The Seven Habits of Highly Effective People, the book became an instant rage because people suddenly got up and took notice that their lives were headed off in the wrong direction; and more than that, they realized that there were so many simple things they could do in order to navigate their life correctly. This book was wonderful education for people, education in how to live life effectively and get closer to the ideal of being a ‘success’ in life.\r\n\r\nBut not everyone understands Stephen Covey’s model fully well, or maybe there are some people who haven’t read it yet. This is definitely true because we still see so much failure all around us. Now, I am not saying that by using Covey’s model, or anyone else’s model for that matter, you can become a sure-shot success, but at least we should have seen many more successes around us already judging by the number of copies the book has sold! So, where is the shortcoming?', 200, '7.jpg', 0),
(31, 'Putting the One Minute Manager to Work', 'Kenneth H. Blanchard', 'Business', 'The One Minute Manager, published in 1982, took the world by storm. More than 13 million copies have been sold in this country and it has been translated into more than 25 languages, making it one of the most influential books about business management ever written. The second book in this record-breaking series, Putting the One Minute Manager to Work, turns the three secrets of One Minute Management into day-to-day skills and shows how they work in real-life situations. By going straight to boardrooms and assembly lines for their examples, the authors put the One Minute concepts into working systems that directly affect a company\'s bottom line. Here is the next step in the revolutionary, simple, and uniquely effective system that is changing how the world runs business. ', 250, '3.jpg', 2),
(32, 'Start with Why: How Great Leaders Inspire Everyone to Take Action', 'Simon Sinek ', 'Business', 'Why are some people and organizations more innovative, more influential, and more profitable than others? Why do some command greater loyalty from customers and employees alike? Even among the successful, why are so few able to repeat their success over and over?People like Martin Luther King Jr., Steve Jobs, and the Wright Brothers might have little in common, but they all started with why. It was their natural ability to start with why that enabled them to inspire those around them and to achieve remarkable things.In studying the leaders who\'ve had the greatest influence in the world, Simon Sinek discovered that they all think, act, and communicate in the exact same way -- and it\'s the complete opposite of what everyone else does. Sinek calls this powerful idea The Golden Circle, and it provides a framework upon which organizations can be built, movements can be lead, and people can be inspired. And it all starts with WHY. \r\n', 375, 'why.jpg', 2),
(33, 'The Innovator\'s Dilemma: The Revolutionary Book that Will Change the Way You Do Business', 'Clayton M. Christensen', 'Business', 'In this revolutionary bestseller, Harvard professor Clayton M. Christensen says outstanding companies can do everything right and still lose their market leadership -- or worse, disappear completely. And he not only proves what he says, he tells others how to avoid a similar fate.\r\n\r\nFocusing on \"disruptive technology\" -- the Honda Super Cub, Intel\'s 8088 processor, or the hydraulic excavator, for example -- Christensen shows why most companies miss \"the next great wave.\" Whether in electronics or retailing, a successful company with established products will get pushed aside unless managers know when to abandon traditional business practices. Using the lessons of successes and failures from leading companies, \"The Innovator\'s Dilemma\" presents a set of rules for capitalizing on the phenomenon of disruptive innovation.', 100, 'innovator.jpg', 0),
(34, 'Principles: Life and Work', 'Ray Dalio ', 'Business', 'Ray Dalio, one of the world’s most successful investors and entrepreneurs, shares the unconventional principles that he’s developed, refined, and used over the past forty years to create unique results in both life and business—and which any person or organization can adopt to help achieve their goals.In 1975, Ray Dalio founded an investment firm, Bridgewater Associates, out of his two-bedroom apartment in New York City. Forty years later, Bridgewater has made more money for its clients than any other hedge fund in history and grown into the fifth most important private company in the United States, according to Fortune magazine. Dalio himself has been named to Time magazine’s list of the 100 most influential people in the world. Along the way, Dalio discovered a set of unique principles that have led to Bridgewater’s exceptionally effective culture, which he describes as “an idea meritocracy that strives to achieve meaningful work and meaningful relationships through radical transparency.” It is these principles, and not anything special about Dalio—who grew up an ordinary kid in a middle-class Long Island neighborhood—that he believes are the reason behind his success.In Principles, Dalio shares what he’s learned over the course of his remarkable career. He argues that life, management, economics, and investing can all be systemized into rules and understood like machines. The book’s hundreds of practical lessons, which are built around his cornerstones of “radical truth” and “radical transparency,” include Dalio laying out the most effective ways for individuals and organizations to make decisions, approach challenges, and build strong teams. He also describes the innovative tools the firm uses to bring an idea meritocracy to life, such as creating “baseball cards” for all employees that distill their strengths and weaknesses, and employing computerized decision-making systems to make believability-weighted decisions.', 345, 'life.jpg', 0),
(35, 'The Goal: A Process of Ongoing Improvement', 'Jeff Cox', 'Business', 'Written in a fast-paced thriller style, The Goal is the gripping novel which is transforming management thinking throughout the Western world.\r\n\r\nAlex Rogo is a harried plant manager working ever more desperately to try and improve performance. His factory is rapidly heading for disaster. So is his marriage. He has ninety days to save his plant—or it will be closed by corporate HQ, with hundreds of job losses. It takes a chance meeting with a colleague from student days—Jonah—to help him break out of conventional ways of thinking to see what needs to be done.\r\n\r\nThe story of Alex\'s fight to save his plant is more than compulsive reading. It contains a serious message for all managers in industry and explains the ideas which underline the Theory of Constraints (TOC) developed by Eli Goldratt.', 200, 'goal.jpg', 0),
(36, 'The Lean Startup: How Today\'s Entrepreneurs Use Innovation to Create Radically Successful Businesses', 'Eric Ries', 'Business', 'Most startups fail. But many of those failures are preventable. The Lean Startup is a new approach being adopted across the globe, changing the way companies are built and new products are launched. \r\n\r\nEric Ries defines a startup as an organization dedicated to creating something new under conditions of extreme uncertainty. This is just as true for one person in a garage or a group of seasoned professionals in a Fortune 500 boardroom. What they have in common is a mission to penetrate that fog of uncertainty to discover a successful path to a sustainable business.\r\n\r\n\r\n\r\nThe Lean Startup approach fosters companies that are both more capital efficient and that leverage human creativity more effectively. Inspired by lessons from lean manufacturing, it relies on \"validated learning,\" rapid scientific experimentation, as well as a number of counter-intuitive practices that shorten product development cycles, measure actual progress without resorting to vanity metrics, and learn what customers really want. It enables a company to shift directions with agility, altering plans inch by inch, minute by minute.\r\n\r\nRather than wasting time creating elaborate business plans, The Lean Startup offers entrepreneurs - in companies of all sizes - a way to test their vision continuously, to adapt and adjust before it\'s too late. Ries provides a scientific approach to creating and managing successful startups in a age when companies need to innovate more than ever. ', 282, 'lean.jpg', 0),
(37, 'Deep Work: Rules for Focused Success in a Distracted World', 'Cal Newport', 'Business', 'One of the most valuable skills in our economy is becoming increasingly rare. If you master this skill, you\'ll achieve extraordinary results.\r\n\r\nDeep work is the ability to focus without distraction on a cognitively demanding task. It\'s a skill that allows you to quickly master complicated information and produce better results in less time. Deep work will make you better at what you do and provide the sense of true fulfillment that comes from craftsmanship. In short, deep work is like a super power in our increasingly competitive twenty-first century economy. And yet, most people have lost the ability to go deep-spending their days instead in a frantic blur of e-mail and social media, not even realizing there\'s a better way.\r\n\r\nIn Deep Work, author and professor Cal Newport flips the narrative on impact in a connected age. Instead of arguing distraction is bad, he instead celebrates the power of its opposite. Dividing this book into two parts, he first makes the case that in almost any profession, cultivating a deep work ethic will produce massive benefits. He then presents a rigorous training regimen, presented as a series of four \"rules,\" for transforming your mind and habits to support this skill.\r\n', 349, 'deep.jpg', 0),
(38, 'Mistborn:The Final Empire', 'Brandon Sanderson', 'Fantasy', 'Mistborn: The Final Empire is set in an analog to the early 18th century, in the dystopian world of Scadrial, where ash constantly falls from the sky, all plants are brown, and supernatural mists cloud every night. One thousand years before the start of the novel, the prophesied Hero of Ages ascended to godhood at the Well of Ascension in order to repel the Deepness, a terror threatening the world whose true nature has been lost to time. Though the Deepness was successfully repelled and mankind saved, the world was changed into its current form by the Hero, who took the title \"Lord Ruler\" and ruled over the Final Empire for a thousand years, as an immortal tyrant and god. Under his rule, society is stratified into the nobility, believed to be the descendants of the friends who helped him achieve godhood; and brutally oppressed peasantry, known as skaa.\r\n\r\nMagic is central to the Mistborn world. The most widely known discipline of magic is called Allomancy, which allows users to gain magical powers by swallowing and \"burning\" specific metals to gain supernatural abilities. Allomantic potential is a genetic trait concentrated in the nobility, though skaa Allomancers exist, due to crossbreeding between the nobility and the skaa. Normal Allomancers have access to one Allomantic power, but an incredibly rare subset of Allomancers, called Mistborn, have access to every Allomantic power.', 250, 'most.jpg', 0),
(39, 'A Wizard of Earthsea', 'Ursula K. Le Guin', 'Fantasy', 'Ged, the greatest sorcerer in all Earthsea, was called Sparrowhawk in his reckless youth. \r\n\r\nHungry for power and knowledge, Sparrowhawk tampered with long-held secrets and loosed a terrible shadow upon the world. This is the tale of his testing, how he mastered the mighty words of power, tamed an ancient dragon, and crossed death\'s threshold to restore the balance.', 374, 'wizard.jpg', 0),
(40, 'His Majesty\'s Dragon', 'Naomi Novik ', 'Fantasy', 'Aerial combat brings a thrilling new dimension to the Napoleonic Wars as valiant warriors ride mighty fighting dragons, bred for size or speed. When HMS Reliant captures a French frigate and seizes the precious cargo, an unhatched dragon egg, fate sweeps Captain Will Laurence from his seafaring life into an uncertain future – and an unexpected kinship with a most extraordinary creature. Thrust into the rarified world of the Aerial Corps as master of the dragon Temeraire, he will face a crash course in the daring tactics of airborne battle. For as France’s own dragon-borne forces rally to breach British soil in Bonaparte’s boldest gambit, Laurence and Temeraire must soar into their own baptism of fire.', 200, 'drag.jpg', 0),
(41, 'Sabriel', 'Garth Nix ', 'Fantasy', 'Sent to a boarding school in Ancelstierre as a young child, Sabriel has had little experience with the random power of Free Magic or the Dead who refuse to stay dead in the Old Kingdom. But during her final semester, her father, the Abhorsen, goes missing, and Sabriel knows she must enter the Old Kingdom to find him. \r\n\r\nWith Sabriel, the first installment in the Abhorsen series, Garth Nix exploded onto the fantasy scene as a rising star, in a novel that takes readers to a world where the line between the living and the dead isn\'t always clear—and sometimes disappears altogether.', 300, 'sabriel.jpg', 0),
(42, 'The Lies of Locke Lamora', 'Scott Lynch ', 'Fantasy', 'An orphan’s life is harsh—and often short—in the mysterious island city of Camorr. But young Locke Lamora dodges death and slavery, becoming a thief under the tutelage of a gifted con artist. As leader of the band of light-fingered brothers known as the Gentleman Bastards, Locke is soon infamous, fooling even the underworld’s most feared ruler. But in the shadows lurks someone still more ambitious and deadly. Faced with a bloody coup that threatens to destroy everyone and everything that holds meaning in his mercenary life, Locke vows to beat the enemy at his own brutal game—or die trying.', 374, 'lies.jpg', 0),
(43, 'Harry Potter and the Deathly Hallows', 'J.K. Rowling', 'Fantasy', 'Harry Potter is leaving Privet Drive for the last time. But as he climbs into the sidecar of Hagrid’s motorbike and they take to the skies, he knows Lord Voldemort and the Death Eaters will not be far behind.\r\n\r\nThe protective charm that has kept him safe until now is broken. But the Dark Lord is breathing fear into everything he loves. And he knows he can’t keep hiding.\r\n\r\nTo stop Voldemort, Harry knows he must find the remaining Horcruxes and destroy them.\r\n\r\nHe will have to face his enemy in one final battle.', 567, 'harry.jpg', 1),
(44, 'Ready Player One', 'Ernest Cline', 'Sci-Fi', 'In the year 2045, reality is an ugly place. The only time teenage Wade Watts really feels alive is when he\'s jacked into the virtual utopia known as the OASIS. Wade\'s devoted his life to studying the puzzles hidden within this world\'s digital confines, puzzles that are based on their creator\'s obsession with the pop culture of decades past and that promise massive power and fortune to whoever can unlock them. When Wade stumbles upon the first clue, he finds himself beset by players willing to kill to take this ultimate prize. The race is on, and if Wade\'s going to survive, he\'ll have to win—and confront the real world he\'s always been so desperate to escape.', 500, 'rpo.jpg', 1),
(45, 'The Martian', 'Andy Weir', 'Sci-Fi', 'Six days ago, astronaut Mark Watney became one of the first people to walk on Mars. \r\n\r\nNow, he’s sure he’ll be the first person to die there.\r\n\r\nAfter a dust storm nearly kills him and forces his crew to evacuate while thinking him dead, Mark finds himself stranded and completely alone with no way to even signal Earth that he’s alive—and even if he could get word out, his supplies would be gone long before a rescue could arrive. \r\n\r\nChances are, though, he won’t have time to starve to death. The damaged machinery, unforgiving environment, or plain-old “human error” are much more likely to kill him first. \r\n\r\nBut Mark isn’t ready to give up yet. Drawing on his ingenuity, his engineering skills — and a relentless, dogged refusal to quit — he steadfastly confronts one seemingly insurmountable obstacle after the next. Will his resourcefulness be enough to overcome the impossible odds against him?\r\n', 490, 'martian.jpg', 0),
(46, 'The Handmaid\'s Tale', 'Margaret Atwood', 'Sci-Fi', 'Offred is a Handmaid in the Republic of Gilead. She may leave the home of the Commander and his wife once a day to walk to food markets whose signs are now pictures instead of words because women are no longer allowed to read. She must lie on her back once a month and pray that the Commander makes her pregnant, because in an age of declining births, Offred and the other Handmaids are valued only if their ovaries are viable. Offred can remember the years before, when she lived and made love with her husband, Luke; when she played with and protected her daughter; when she had a job, money of her own, and access to knowledge. But all of that is gone now... ', 450, 'hand.jpg', 3),
(47, 'Ender\'s Game', 'Orson Scott Card', 'Fiction', 'Andrew \"Ender\" Wiggin thinks he is playing computer simulated war games; he is, in fact, engaged in something far more desperate. The result of genetic experimentation, Ender may be the military genius Earth desperately needs in a war against an alien enemy seeking to destroy all human life. The only way to find out is to throw Ender into ever harsher training, to chip away and find the diamond inside, or destroy him utterly. Ender Wiggin is six years old when it begins. He will grow up fast.\r\n\r\nBut Ender is not the only result of the experiment. The war with the Buggers has been raging for a hundred years, and the quest for the perfect general has been underway almost as long. Ender\'s two older siblings, Peter and Valentine, are every bit as unusual as he is, but in very different ways. While Peter was too uncontrollably violent, Valentine very nearly lacks the capability for violence altogether. Neither was found suitable for the military\'s purpose. But they are driven by their jealousy of Ender, and by their inbred drive for power. Peter seeks to control the political process, to become a ruler. Valentine\'s abilities turn more toward the subtle control of the beliefs of commoner and elite alike, through powerfully convincing essays. Hiding their youth and identities behind the anonymity of the computer networks, these two begin working together to shape the destiny of Earth-an Earth that has no future at all if their brother Ender fails.', 500, 'ender.jpg', 0),
(48, 'The Hitchhiker\'s Guide to the Galaxy', 'Douglas Adams', 'Sci-Fi', 'Seconds before the Earth is demolished to make way for a galactic freeway, Arthur Dent is plucked off the planet by his friend Ford Prefect, a researcher for the revised edition of The Hitchhiker\'s Guide to the Galaxy who, for the last fifteen years, has been posing as an out-of-work actor.\r\n\r\nTogether this dynamic pair begin a journey through space aided by quotes from The Hitchhiker\'s Guide (\"A towel is about the most massively useful thing an interstellar hitchhiker can have\") and a galaxy-full of fellow travelers: Zaphod Beeblebrox—the two-headed, three-armed ex-hippie and totally out-to-lunch president of the galaxy; Trillian, Zaphod\'s girlfriend (formally Tricia McMillan), whom Arthur tried to pick up at a cocktail party once upon a time zone; Marvin, a paranoid, brilliant, and chronically depressed robot; Veet Voojagig, a former graduate student who is obsessed with the disappearance of all the ballpoint pens he bought over the years. ', 500, 'galaxy.jpg', 0),
(49, 'Artemis', 'Andy Weir ', 'Fiction', 'Jazz Bashara is a criminal.\r\n\r\nWell, sort of. Life on Artemis, the first and only city on the moon, is tough if you\'re not a rich tourist or an eccentric billionaire. So smuggling in the occasional harmless bit of contraband barely counts, right? Not when you\'ve got debts to pay and your job as a porter barely covers the rent.\r\n\r\nEverything changes when Jazz sees the chance to commit the perfect crime, with a reward too lucrative to turn down. But pulling off the impossible is just the start of her problems, as she learns that she\'s stepped square into a conspiracy for control of Artemis itself—and that now, her only chance at survival lies in a gambit even riskier than the first.', 450, 'artemis.jpg', 3),
(50, 'A Wrinkle in Time', 'Madeleine L\'Engle', 'Fiction', 'It was a dark and stormy night; Meg Murry, her small brother Charles Wallace, and her mother had come down to the kitchen for a midnight snack when they were upset by the arrival of a most disturbing stranger. \r\n\r\n\"Wild nights are my glory,\" the unearthly stranger told them. \"I just got caught in a downdraft and blown off course. Let me be on my way. Speaking of way, by the way, there is such a thing as a tesseract\".\r\n\r\nMeg\'s father had been experimenting with this fifth dimension of time travel when he mysteriously disappeared. Now the time has come for Meg, her friend Calvin, and Charles Wallace to rescue him. But can they outwit the forces of evil they will encounter on their heart-stopping journey through space?', 230, 'wrinkle.jpg', 3),
(51, 'Ringworld', 'Larry Niven', 'Fiction', 'Pierson\'s puppeteers, three-leg two-head aliens find immense structure in unexplored part of the universe. Frightened of meeting the builders, they send a team of two humans, a puppeteer and a kzin, eight-foot red-fur catlike alien. Ringworld is 180 million miles across, sun at center. But the expedition crashes, and crew face disastrously long trek.', 330, 'ringworld.jpg', 0),
(52, 'The Einstein Intersection', 'Samuel R. Delany', 'Sci-Fi', 'The surface story tells of the problems a member of an alien race, Lo Lobey, has assimilating the mythology of earth, where his kind have settled among the leftover artifacts of humanity. The deeper tale concerns, however, the way those who are \'different\' must deal with the dominant cultural ideology. The tale follows Lobey\'s mythic quest for his lost love, Friza. In luminous and hallucinated language, it explores what new myths might emerge from the detritus of the human world as those who are \'different\' try to seize history and the day.', 100, 'ein.jpg', 2),
(53, 'The Falling Woman', 'Pat Murphy ', 'Sci-Fi', 'Elizabeth Waters, an archaeologist who abandoned her husband and daughter years ago to pursue her career, can see the shadows of the past. It\'s a gift she keeps secret from her colleagues and students, one that often leads her to incredible archaeological discoveries and the realization that she might be going mad. Then on a dig in the Yucatan, the shadow of a Mayan priestess speaks to her. Suddenly Elizabeth\'s daughter Diane arrives, hoping to reconnect with her mother. As mother, daughter and priestess fall into the mysterious world of Mayan magic, it is clear one will be asked to make the ultimate sacrifice. ', 200, 'the.jpg', 2),
(54, 'All the Letters I Should Have Sent', 'Rania Naim', 'Young Adult', 'To the people we loved and the people who couldn’t love us. \r\n\r\nTo the ones who broke our hearts and the ones that got away. \r\n\r\nTo the ones who loved us and the ones who healed us. \r\n\r\nTo the ones who made us ask important questions and the ones who gave us the answers. \r\n\r\nTo all the people who once came into our lives and left an impact, left a mark or left a scar. \r\n\r\nThis book is for you.', 400, 'all.jpg', 2),
(55, 'Little Black Book: A Toolkit for Working Women', 'Otegha Uwagba', 'Business', '‘Little Black Book is THE book of the year for working women with drive’ Refinery 29\r\n\r\nThe essential career handbook for creative working women.\r\n\r\n‘A compact gem’ Stylist\r\n\r\nLittle Black Book: A Toolkit For Working Women is the modern career guide every creative woman needs, whether you’re just starting out or already have years of experience. Packed with fresh ideas and no-nonsense practical advice, this travel-sized career handbook is guaranteed to become your go-to resource when it comes to building the career you want.\r\n\r\nWriter Otegha Uwagba (one of Forbes European 30 Under 30) takes you through everything you need to build a successful self-made career: from how to negotiate a payrise to building a killer personal brand, via a crash course in networking like a pro, and tips for overcoming creative block. Plus Little Black Book is full of indispensable advice on how to thrive as a freelancer, and an entire chapter dedicated to helping you master the tricky art of public speaking.\r\n\r\nWith contributions from trailblazing creative women including acclaimed author Chimamanda Ngozi Adichie, Refinery29 co-founder Piera Gelardi, The Gentlewoman\'s Editor in Chief Penny Martin, and many more, Little Black Book is a curation of essential wisdom and hard-won career insights. Whether you’re a thinker, a maker, an artist or an entrepreneur, you’ll find plenty of inspiration for your working life here. ', 200, 'little.jpg', 0),
(58, 'a', 'a', 'Business', 'afsdfds', 200, 'monocle.jpg', 1),
(63, 'a', 'a', 'Fantasy', 'afsdfds', 200, 'rrrr.jpg', 1),
(64, 'ad', 'ad', '0', 'da', 200, 'nagas.jpg', 2),
(65, 'gdfd', 'erre', '0', 'errrerere', 200, 'a2.PNG', 2);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(100) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `venue` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `price` int(100) NOT NULL DEFAULT 200,
  `contact` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `venue`, `date`, `price`, `contact`, `description`, `image`) VALUES
(1, 'Book Signing', 'Kora Kendra Ground,Borivali', '2018-10-03', 200, '21784784', 'Get an exclusive personalized copy of the latest book by Steve Sheinkin', '1.jpg'),
(2, 'Author Meet And Greet', 'NSCI,Worli', '2018-10-26', 200, '8299018383', 'Get a chance of once in a lifetime to meet the author of one of the greatest fantasy story of all time of Harry Potter , JK Rowling herself ', '2.jpg'),
(3, 'Book Sale', 'Somaiya,Ghatkopoar', '2018-11-15', 200, '893834933', 'All books at half price .. Come see it for yourself .. Any book .. Any Genre .. Unlimited purchases', '3.jpg'),
(4, 'Book Review', 'Juhu Circle,Juhu', '2018-11-30', 300, '49034903', 'An event where various journalists from different leading papers come together and voice their opinions to the audience gathered about the latest book releases ', '4.jpg'),
(5, 'Book Exchange', 'Dandiya Ground,Borivali', '2018-12-21', 200, '564667889', 'Come along with your book in good condition and socialise with other avid readers and exchange books with each other and you could finally possess the book you always wanted ', '5.jpg'),
(6, 'Book Launch', 'World Trade Centre,Nariman Point', '2019-01-16', 500, '28335454', 'The latest in the series , Chetan Bhagat will be himself launching his new release and give us all an insight into his inspiration for this book', '6.jpg'),
(7, 'Book Launch ', 'Dome,Worli', '2019-01-24', 200, '839298933', 'Another book launch , this time it is Elon Musk who is coming out with his newest memoir on the days he spent at Tesla ', '7.jpg'),
(8, 'Cash for Books', 'World Trade Centre,Nariman Point', '2019-02-06', 200, '365277272', 'Come with your old books and get cash in return based on the condition of the book and its value ', '8.jpg'),
(9, 'Book Sale', 'Somaiya,Ghatkopar', '2019-02-28', 399, '21356752367', 'Books at half price or even lesser than that , upto 60% discount', '9.jpg'),
(10, 'Book Launch', 'Trade Centre,BKC', '2019-03-13', 288, '271871272', 'The great Abdul Kalam had a long lasting legacy while being in the political circle of India for many years... Hers a book dedicated to the man detailing all his history and career , from his finest moments to the nuclear program.', '10.jpg'),
(11, 'Book Announcement ', 'Ballard Estate,Colaba', '2019-04-17', 400, '2731834834', 'Sarah J Mass will be announcing the title of her new book in the seriess to the world press and to all her fans and also give details about the release date ', '11.jpg'),
(31, 'xyzasss', 'xyzmm', '2018-02-25', 200, '45454ww5', 'xyzasss', 'sidbook.png'),
(53, 'in', 'ono', '0009-01-01', 200, '12', 'jn', '53.png'),
(54, 'xx', 'xx', '2018-02-21', 200, '212', 'xx', 'small-biz-advice.png'),
(56, 'xxx', 'xx', '0002-02-22', 200, '212', 'xx', '56.png'),
(57, 'w', 'w', '2019-10-03', 200, '2', 'w', '57.jpg'),
(58, 'w', 'w', '2018-10-04', 200, '1', 'w', 'logo.png'),
(59, 'w', 'w', '2019-10-03', 200, '2', 'w', 'kindle2.png'),
(60, 'ret', 'er', '2018-10-10', 200, '34433', 'etr', 'ssjson.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `name`) VALUES
(1, 'Fiction'),
(2, 'Romance'),
(3, 'Sci-Fi'),
(4, 'Fantasy'),
(5, 'Young Adult'),
(6, 'Business');

-- --------------------------------------------------------

--
-- Table structure for table `suggestEvent`
--

CREATE TABLE `suggestEvent` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ename` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `edesc` text COLLATE utf8_unicode_ci NOT NULL,
  `vaddr` text COLLATE utf8_unicode_ci NOT NULL,
  `vcontact` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `suggestEvent`
--

INSERT INTO `suggestEvent` (`id`, `username`, `sex`, `fname`, `lname`, `email`, `phone`, `ename`, `edesc`, `vaddr`, `vcontact`, `image`, `status`) VALUES
(36, 'lakshk', 'Mr', 'yyy', 'yy', 'y@xx.com', '12', 'yyy', 'yy', 'yy', '212', 'nagas.jpg', 'Rejected'),
(37, 'rohit', 'Mr', 'Rohit', 'N', 'nadiger.r@somaiya.edu', '8291017562', 'Book Swap', 'Swap your favourite books with other people and read the books you missed out on from your favourite authors', 'Trade Centre,Worli', '6732627277', 'assdg.jpeg', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `userBooks`
--

CREATE TABLE `userBooks` (
  `userId` int(11) NOT NULL,
  `bookId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `userBooks`
--

INSERT INTO `userBooks` (`userId`, `bookId`) VALUES
(11, 2),
(12, 3),
(12, 6),
(11, 8),
(20, 6),
(20, 54),
(23, 2),
(23, 15),
(24, 7),
(25, 6),
(26, 8),
(27, 19),
(12, 2);

-- --------------------------------------------------------

--
-- Table structure for table `userEvents`
--

CREATE TABLE `userEvents` (
  `userid` int(11) NOT NULL,
  `eventid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `userEvents`
--

INSERT INTO `userEvents` (`userid`, `eventid`) VALUES
(12, 3),
(12, 4),
(20, 2),
(25, 5),
(26, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `strtdate` date NOT NULL DEFAULT current_timestamp(),
  `enddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `strtdate`, `enddate`) VALUES
(12, 'lakshk', 'lakshk@gmail.com', 'laksh', '2018-10-06', '2019-01-10'),
(16, 'lolp', 'poi@w.cm', 'poo', '2018-10-06', '2018-11-06'),
(17, 'year', 'w@a.com', 'y', '2018-10-06', '2019-10-06'),
(18, 'ret', 'asd@sad.com', '099', '2018-10-07', '2019-10-07'),
(19, 'retp', 'asd@sad.com', '099', '2018-10-07', '2019-10-07'),
(20, 'thehalfbloodprince', 'thehalfbloodprince@gmail.com', 'thehalfbloodprince', '2018-10-08', '2019-10-08'),
(21, 'qwwwww', 'parth.js@somaiya.edu', 'poi', '2018-10-08', '2019-10-08'),
(22, 'tr', 'q@c.com', 'qw', '2018-10-08', '2018-11-08'),
(23, '1234', '21@gmail.com', '1234', '2018-10-08', '2018-11-08'),
(24, '12345678', '123@gmail.com', '123', '2018-10-09', '2018-11-09'),
(25, 'jyoti', 'jyoti@gmail.com', 'jyoti', '2018-10-10', '2019-10-10'),
(27, 'rohit', 'nadiger.r@somaiya.edu', 'rohit', '2018-10-15', '2019-10-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suggestEvent`
--
ALTER TABLE `suggestEvent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `suggestEvent`
--
ALTER TABLE `suggestEvent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
