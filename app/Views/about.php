<?= $this->extend("layout/base_inner.php") ?>


<?= $this->section('titleContent'); ?>
	<?= $pageTitle; ?>
<?= $this->endsection(); ?>

<?= $this->section('innerPageHeading'); ?>
		<?= $innerPageHeading; ?>
<?= $this->endsection(); ?>