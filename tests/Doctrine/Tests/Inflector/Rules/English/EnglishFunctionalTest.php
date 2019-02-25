<?php

declare(strict_types=1);

namespace Doctrine\Tests\Inflector\Rules\English;

use Doctrine\Inflector\Inflector;
use Doctrine\Inflector\InflectorFactory;
use Doctrine\Inflector\Language;
use Doctrine\Tests\Inflector\Rules\LanguageFunctionalTest;

class EnglishFunctionalTest extends LanguageFunctionalTest
{
    /**
     * @return string[][]
     */
    public function dataSampleWords() : array
    {
        return [
            ['', ''],
            ['ability', 'abilities'],
            ['abuse', 'abuses'],
            ['acceptancecriterion', 'acceptancecriteria'],
            ['address', 'addresses'],
            ['advice', 'advice'],
            ['agency', 'agencies'],
            ['aircraft', 'aircraft'],
            ['alias', 'aliases'],
            ['alias', 'aliases'],
            ['alumnus', 'alumni'],
            ['amoyese', 'amoyese'],
            ['analysis', 'analyses'],
            ['analysis', 'analyses'],
            ['aquarium', 'aquaria'],
            ['arch', 'arches'],
            ['archive', 'archives'],
            ['art', 'art'],
            ['atlas', 'atlases'],
            ['audio', 'audio'],
            ['avalanche', 'avalanches'],
            ['axe', 'axes'],
            ['baby', 'babies'],
            ['bacillus', 'bacilli'],
            ['bacterium', 'bacteria'],
            ['baggage', 'baggage'],
            ['basis', 'bases'],
            ['bison', 'bison'],
            ['borghese', 'borghese'],
            ['box', 'boxes'],
            ['bream', 'bream'],
            ['breeches', 'breeches'],
            ['britches', 'britches'],
            ['buffalo', 'buffalo'],
            ['bureau', 'bureaus'],
            ['bus', 'buses'],
            ['bus', 'buses'],
            ['bus', 'buses'],
            ['butter', 'butter'],
            ['cache', 'caches'],
            ['cactus', 'cacti'],
            ['cafe', 'cafes'],
            ['calf', 'calves'],
            ['calf', 'calves'],
            ['cantus', 'cantus'],
            ['carp', 'carp'],
            ['case', 'cases'],
            ['categoria', 'categorias'],
            ['category', 'categories'],
            ['chassis', 'chassis'],
            ['chateau', 'chateaux'],
            ['cherry', 'cherries'],
            ['child', 'children'],
            ['child', 'children'],
            ['child', 'children'],
            ['church', 'churches'],
            ['circus', 'circuses'],
            ['city', 'cities'],
            ['clippers', 'clippers'],
            ['clothes', 'clothes'],
            ['clothing', 'clothing'],
            ['coal', 'coal'],
            ['cod', 'cod'],
            ['cod', 'cod'],
            ['coitus', 'coitus'],
            ['comment', 'comments'],
            ['compensation', 'compensation'],
            ['congoese', 'congoese'],
            ['contretemps', 'contretemps'],
            ['cookie', 'cookies'],
            ['copy', 'copies'],
            ['coreopsis', 'coreopsis'],
            ['corps', 'corps'],
            ['cotton', 'cotton'],
            ['cow', 'cows'],
            ['crisis', 'crises'],
            ['crisis', 'crises'],
            ['criterion', 'criteria'],
            ['currency', 'currencies'],
            ['curriculum', 'curricula'],
            ['curve', 'curves'],
            ['data', 'data'],
            ['data', 'data'],
            ['database', 'databases'],
            ['day', 'days'],
            ['debris', 'debris'],
            ['deer', 'deer'],
            ['deer', 'deer'],
            ['deer', 'deer'],
            ['demo', 'demos'],
            ['diabetes', 'diabetes'],
            ['diagnosis', 'diagnoses'],
            ['diagnosis_a', 'diagnosis_as'],
            ['dictionary', 'dictionaries'],
            ['dive', 'dives'],
            ['djinn', 'djinn'],
            ['domino', 'dominoes'],
            ['dwarf', 'dwarves'],
            ['dwarf', 'dwarves'],
            ['echo', 'echoes'],
            ['edge', 'edges'],
            ['education', 'education'],
            ['eland', 'eland'],
            ['elf', 'elves'],
            ['elf', 'elves'],
            ['elk', 'elk'],
            ['emoji', 'emoji'],
            ['emphasis', 'emphases'],
            ['employee-child', 'employee-children'],
            ['energy', 'energies'],
            ['equipment', 'equipment'],
            ['equipment', 'equipment'],
            ['equipment', 'equipment'],
            ['evidence', 'evidence'],
            ['experience', 'experience'],
            ['experience', 'experience'],
            ['family', 'families'],
            ['faroese', 'faroese'],
            ['fax', 'faxes'],
            ['feedback', 'feedback'],
            ['feedback', 'feedback'],
            ['fish', 'fish'],
            ['fish', 'fish'],
            ['fish', 'fish'],
            ['fish', 'fish'],
            ['fix', 'fixes'],
            ['flounder', 'flounder'],
            ['flour', 'flour'],
            ['flush', 'flushes'],
            ['fly', 'flies'],
            ['focus', 'foci'],
            ['foe', 'foes'],
            ['foobar', 'foobars'],
            ['foochowese', 'foochowese'],
            ['food', 'food'],
            ['food_menu', 'food_menus'],
            ['foodmenu', 'foodmenus'],
            ['foot', 'feet'],
            ['fungus', 'fungi'],
            ['furniture', 'furniture'],
            ['furniture', 'furniture'],
            ['furniture', 'furniture'],
            ['gallows', 'gallows'],
            ['gas', 'gas'],
            ['genevese', 'genevese'],
            ['genoese', 'genoese'],
            ['genus', 'genera'],
            ['gilbertese', 'gilbertese'],
            ['glove', 'gloves'],
            ['gold', 'gold'],
            ['goose', 'geese'],
            ['grave', 'graves'],
            ['gulf', 'gulfs'],
            ['half', 'halves'],
            ['half', 'halves'],
            ['half', 'halves'],
            ['hardware', 'hardware'],
            ['headquarters', 'headquarters'],
            ['hero', 'heroes'],
            ['hero', 'heroes'],
            ['herpes', 'herpes'],
            ['hijinks', 'hijinks'],
            ['hippopotamus', 'hippopotami'],
            ['hoax', 'hoaxes'],
            ['homework', 'homework'],
            ['horse', 'horses'],
            ['hottentotese', 'hottentotese'],
            ['house', 'houses'],
            ['house', 'houses'],
            ['human', 'humans'],
            ['identity', 'identities'],
            ['impatience', 'impatience'],
            ['index', 'indices'],
            ['index', 'indices'],
            ['information', 'information'],
            ['information', 'information'],
            ['information', 'information'],
            ['innings', 'innings'],
            ['iris', 'irises'],
            ['jackanapes', 'jackanapes'],
            ['jeans', 'jeans'],
            ['jeans', 'jeans'],
            ['jedi', 'jedi'],
            ['kiplingese', 'kiplingese'],
            ['kitchenware', 'kitchenware'],
            ['kiss', 'kisses'],
            ['knife', 'knives'],
            ['knife', 'knives'],
            ['knowledge', 'knowledge'],
            ['knowledge', 'knowledge'],
            ['kongoese', 'kongoese'],
            ['larva', 'larvae'],
            ['leaf', 'leaves'],
            ['leaf', 'leaves'],
            ['leather', 'leather'],
            ['lens', 'lenses'],
            ['life', 'lives'],
            ['loaf', 'loaves'],
            ['loaf', 'loaves'],
            ['louse', 'lice'],
            ['love', 'love'],
            ['love', 'love'],
            ['lucchese', 'lucchese'],
            ['luggage', 'luggage'],
            ['luggage', 'luggage'],
            ['mackerel', 'mackerel'],
            ['maltese', 'maltese'],
            ['man', 'men'],
            ['man', 'men'],
            ['man', 'men'],
            ['management', 'management'],
            ['matrix', 'matrices'],
            ['matrix', 'matrices'],
            ['matrix_fu', 'matrix_fus'],
            ['matrix_row', 'matrix_rows'],
            ['medium', 'media'],
            ['medium', 'media'],
            ['memorandum', 'memoranda'],
            ['menu', 'menus'],
            ['menu', 'menus'],
            ['mess', 'messes'],
            ['metadata', 'metadata'],
            ['mews', 'mews'],
            ['middleware', 'middleware'],
            ['money', 'money'],
            ['moose', 'moose'],
            ['moose', 'moose'],
            ['moose', 'moose'],
            ['motto', 'mottoes'],
            ['mouse', 'mice'],
            ['mouse', 'mice'],
            ['move', 'moves'],
            ['move', 'moves'],
            ['movie', 'movies'],
            ['mumps', 'mumps'],
            ['music', 'music'],
            ['my_analysis', 'my_analyses'],
            ['nankingese', 'nankingese'],
            ['neurosis', 'neuroses'],
            ['news', 'news'],
            ['news', 'news'],
            ['news', 'news'],
            ['news', 'news'],
            ['newsletter', 'newsletters'],
            ['nexus', 'nexus'],
            ['niasese', 'niasese'],
            ['niveau', 'niveaux'],
            ['node_child', 'node_children'],
            ['nodemedia', 'nodemedia'],
            ['nucleus', 'nuclei'],
            ['nutrition', 'nutrition'],
            ['oasis', 'oases'],
            ['octopus', 'octopuses'],
            ['octopus', 'octopuses'],
            ['offspring', 'offspring'],
            ['oil', 'oil'],
            ['old_news', 'old_news'],
            ['olive', 'olives'],
            ['ox', 'oxen'],
            ['pants', 'pants'],
            ['pass', 'passes'],
            ['passerby', 'passersby'],
            ['patience', 'patience'],
            ['pekingese', 'pekingese'],
            ['person', 'people'],
            ['person', 'people'],
            ['person', 'people'],
            ['perspective', 'perspectives'],
            ['photo', 'photos'],
            ['piedmontese', 'piedmontese'],
            ['pincers', 'pincers'],
            ['pistoiese', 'pistoiese'],
            ['plankton', 'plankton'],
            ['plateau', 'plateaux'],
            ['pliers', 'pliers'],
            ['pokemon', 'pokemon'],
            ['police', 'police'],
            ['police', 'police'],
            ['police', 'police'],
            ['police', 'police'],
            ['polish', 'polish'],
            ['portfolio', 'portfolios'],
            ['portuguese', 'portuguese'],
            ['potato', 'potatoes'],
            ['potato', 'potatoes'],
            ['powerhouse', 'powerhouses'],
            ['prize', 'prizes'],
            ['proceedings', 'proceedings'],
            ['process', 'processes'],
            ['progress', 'progress'],
            ['query', 'queries'],
            ['quiz', 'quizzes'],
            ['quiz', 'quizzes'],
            ['rabies', 'rabies'],
            ['radius', 'radii'],
            ['rain', 'rain'],
            ['reflex', 'reflexes'],
            ['research', 'research'],
            ['rhinoceros', 'rhinoceros'],
            ['rice', 'rice'],
            ['rice', 'rice'],
            ['rice', 'rice'],
            ['roof', 'roofs'],
            ['runner-up', 'runners-up'],
            ['safe', 'safes'],
            ['salesperson', 'salespeople'],
            ['salmon', 'salmon'],
            ['salmon', 'salmon'],
            ['sand', 'sand'],
            ['sarawakese', 'sarawakese'],
            ['save', 'saves'],
            ['scarf', 'scarves'],
            ['scissors', 'scissors'],
            ['scissors', 'scissors'],
            ['scratch', 'scratches'],
            ['sea bass', 'sea bass'],
            ['sea-bass', 'sea-bass'],
            ['search', 'searches'],
            ['series', 'series'],
            ['series', 'series'],
            ['series', 'series'],
            ['series', 'series'],
            ['sex', 'sexes'],
            ['shavese', 'shavese'],
            ['shears', 'shears'],
            ['sheep', 'sheep'],
            ['sheep', 'sheep'],
            ['sheep', 'sheep'],
            ['shelf', 'shelves'],
            ['shoe', 'shoes'],
            ['shoe', 'shoes'],
            ['siemens', 'siemens'],
            ['silk', 'silk'],
            ['sku', 'skus'],
            ['slice', 'slices'],
            ['sms', 'sms'],
            ['soap', 'soap'],
            ['social media', 'social media'],
            ['socialmedia', 'socialmedia'],
            ['software', 'software'],
            ['son-in-law', 'sons-in-law'],
            ['spam', 'spam'],
            ['species', 'species'],
            ['species', 'species'],
            ['species', 'species'],
            ['species', 'species'],
            ['splash', 'splashes'],
            ['spokesman', 'spokesmen'],
            ['spouse', 'spouses'],
            ['spy', 'spies'],
            ['stack', 'stacks'],
            ['stadium', 'stadia'],
            ['staff', 'staff'],
            ['staff', 'staff'],
            ['status', 'statuses'],
            ['status_code', 'status_codes'],
            ['stimulus', 'stimuli'],
            ['stitch', 'stitches'],
            ['story', 'stories'],
            ['sugar', 'sugar'],
            ['swine', 'swine'],
            ['swine', 'swine'],
            ['switch', 'switches'],
            ['syllabus', 'syllabi'],
            ['talent', 'talent'],
            ['tax', 'taxes'],
            ['taxi', 'taxis'],
            ['taxon', 'taxa'],
            ['terminus', 'termini'],
            ['testis', 'testes'],
            ['thesis', 'theses'],
            ['Thief', 'Thieves'],
            ['tomato', 'tomatoes'],
            ['tomato', 'tomatoes'],
            ['tooth', 'teeth'],
            ['toothpaste', 'toothpaste'],
            ['tornado', 'tornadoes'],
            ['traffic', 'traffic'],
            ['traffic', 'traffic'],
            ['travel', 'travel'],
            ['trousers', 'trousers'],
            ['trousers', 'trousers'],
            ['trout', 'trout'],
            ['try', 'tries'],
            ['tuna', 'tuna'],
            ['us', 'us'],
            ['valve', 'valves'],
            ['vermontese', 'vermontese'],
            ['vertex', 'vertices'],
            ['vertex', 'vertices'],
            ['vinegar', 'vinegar'],
            ['virus', 'viri'],
            ['volcano', 'volcanoes'],
            ['volcano', 'volcanoes'],
            ['ware', 'wares'],
            ['wash', 'washes'],
            ['watch', 'watches'],
            ['wave', 'waves'],
            ['weather', 'weather'],
            ['wenchowese', 'wenchowese'],
            ['wharf', 'wharves'],
            ['wheat', 'wheat'],
            ['whiting', 'whiting'],
            ['wife', 'wives'],
            ['wife', 'wives'],
            ['wildebeest', 'wildebeest'],
            ['wish', 'wishes'],
            ['woman', 'women'],
            ['woman', 'women'],
            ['wood', 'wood'],
            ['wool', 'wool'],
            ['work', 'work'],
            ['yengeese', 'yengeese'],
            ['zombie', 'zombies'],
            ['|ice', '|ices'],
        ];
    }

    protected function createInflector() : Inflector
    {
        return (new InflectorFactory())(Language::ENGLISH);
    }
}
