say-hello:
	echo Hello, World!;
test:
	composer exec --verbose phpunit Tests
lint:
	composer exec --verbose phpcs -- --standard=PSR12 src;