<?php
    use PHPUnit\Framework\TestCase;


    class UsernameGetterTest extends TestCase {
        
        public function testFormSubmissionWithUsername() {
            $expectedOutput = 'The user\'s name is testUser';
            $_POST['name'] = 'testUser';

            require_once 'index.php';

            $this->assertStringContainsString($expectedOutput, print_r(ob_get_contents(), true));
        }

    }


?>