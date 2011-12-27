## String Helper

### Installation

0. [Download this package](https://github.com/spadin/string_helper/zipball/master).
0. Unzip and move the `string_helper` folder into the packages directory of your Concrete5 installation.
0. From the Concrete5 dashboard, click the Install Package button in the Add Functionality tab.

### Usage

Controller:

        $string_helper = Loader::helper('string','string_helper');
        $string_helper->slugify('This might be the title of a page.'); // returns: 'this-might-be-the-title-of-a-page'
