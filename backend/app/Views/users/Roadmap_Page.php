<!DOCTYPE html>
<html lang="en">
    <?= view('components/rp-head') ?>
<body>
    <?= view('components/rp-header') ?>

        <?= view('components/filter') ?>

        <?= view('components/statistics') ?>

        <?= view('components/progress') ?>

        <?= view('components/pending') ?>

        <?= view('components/completed') ?>
    </div>

    <script>
        // Filter functionality
        document.getElementById('filter').addEventListener('change', function() {
            const filterValue = this.value;
            const roadmapItems = document.querySelectorAll('.roadmap-item');
            
            roadmapItems.forEach(item => {
                if (filterValue === 'all') {
                    item.style.display = 'block';
                } else {
                    const itemStatus = item.dataset.status;
                    if (itemStatus === filterValue) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                }
            });
            
            // Update statistics based on filter
            updateStatistics(filterValue);
        });

        function updateStatistics(filter) {
            const items = document.querySelectorAll('.roadmap-item');
            let visible = 0;
            
            items.forEach(item => {
                if (filter === 'all' || item.dataset.status === filter) {
                    visible++;
                }
            });
            
            // You can add more sophisticated statistics updating here
        }

        // Add smooth animations
        document.querySelectorAll('.roadmap-item').forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px)';
            });
            
            item.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    </script>
</body>
</html>