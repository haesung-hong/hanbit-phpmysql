<form action="" method="post">
	<input type="hidden" name="jokeid" value="<?=$joke['id'] ?? ''?>">
    <label for="joketext">유머글을 입력해주세요:</label>
    <textarea id="joketext" name="joketext" rows="3" cols="40"><?=$joke['joketext'] ?? ''?></textarea>
    <input type="submit" name="submit" value="Save">
</form>