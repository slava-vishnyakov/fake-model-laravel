<?php

class ExampleTest extends TestCase {

	public function testBasicExample()
	{
        $fakeModel = new FakeModel();
        $this->assertEquals(false, $fakeModel->beforeSaveFired);
        $fakeModel->save();
        $this->assertEquals(true, $fakeModel->beforeSaveFired);
	}

}
